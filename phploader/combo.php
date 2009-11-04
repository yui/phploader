<?PHP
/**
 *  Copyright (c) 2009, Yahoo! Inc. All rights reserved.
 *  Code licensed under the BSD License:
 *  http://developer.yahoo.net/yui/license.html
 *  version: 1.0.0b2
 */
 
/*
    This feature will allow YUI PHP Loader to combine files without relying 
    on a remote combo-service.  The key use case here would be someone 
    writing their own website/application in PHP.

    1. The main endpoint for combo requests in this case is combo.php.  Place
        this file in the same location as loader.php.

        Note: If the phploader directory does not live in the webserver's root 
        folder then modify the PATH_TO_LIB variable accordingly

    2. Download and extract each version of YUI you intend to support into
        the phploader/lib directory.

        A valid setup would look something like:
        htdocs/phploader/lib/2.8.0r4/build
        htdocs/phploader/lib/2.7.0/build
        etc...
*/

require "./combo_functions.inc.php";

//Web accessible path to the YUI PHP loader lib directory (Override as needed)
define("PATH_TO_LIB", server() . "/phploader/lib/"); 

//APC Configuration
define("APC_AVAIL", function_exists('apc_fetch') ? true : false);
define("APC_TTL", 0);

$queryString = getenv('QUERY_STRING') ? urldecode(getenv('QUERY_STRING')) : '';
if (isset($queryString) && !empty($queryString)) {
    $yuiFiles    = explode("&", $queryString);
    $contentType = strpos($yuiFiles[0], ".js") ? 'application/x-javascript' : ' text/css';
    
    $cache = false;
    if (APC_AVAIL === true) {
        $cache = apc_fetch('combo:'.$queryString);
    }
    
    if ($cache) {
        //Set cache headers and output cache content
        header("Cache-Control: max-age=315360000");
        header("Expires: " . date("D, j M Y H:i:s", strtotime("now + 10 years")) ." GMT");
        header("Content-Type: " . $contentType);
        echo $cache;
    } else {
        //Use the first module to determine which version of the YUI meta info to load
        if (isset($yuiFiles) && !empty($yuiFiles)) {
            $metaInfo = explode("/", $yuiFiles[0]);
            $yuiVersion = $metaInfo[0];
        }

        include("./loader.php");
        $loader = new YAHOO_util_Loader($yuiVersion);
        $base   = PATH_TO_LIB . $yuiVersion . "/build/";
        $baseWithoutBuild = PATH_TO_LIB . $yuiVersion . "/";
        $loader->base = $base; 

        //Detect and set a filter as needed (defaults to minified version)
        if (strpos($queryString, "-debug.js") !== false) {
            $loader->filter = YUI_DEBUG;
        } else if (strpos($queryString, "-min.js") === false && strpos($queryString, "-debug.js") === false) {
            $loader->filter = YUI_RAW;
        }
        
        //Verify this version of the library exists locally
        $localPathToBuild = "../lib/" . $yuiVersion . "/build/";
        if (file_exists($localPathToBuild) === false || is_readable($localPathToBuild ) === false) {
            die('<!-- Unable to locate the YUI build directory! -->');
        }

        //Detect and load the required components now
        $yuiComponents = array();
        foreach($yuiFiles as $yuiFile) {
            $parts = explode("/", $yuiFile);
            if (isset($parts[0]) && isset($parts[1]) && isset($parts[2])) {
                //Add module to array for loading
                $yuiComponents[] = $parts[2];
            } else {
               die('<!-- Unable to determine module name! -->');
            }
        }

        //Load the components
        call_user_func_array(array($loader, 'load'), $yuiComponents);

        //Set cache headers and output raw file content
        header("Cache-Control: max-age=315360000");
        header("Expires: " . date("D, j M Y H:i:s", strtotime("now + 10 years")) ." GMT");
        header("Content-Type: " . $contentType);
        if ($contentType == "application/x-javascript") {
            $rawScript = $loader->script_raw();
            if (APC_AVAIL === true) {
                apc_store('combo:'.$queryString, $rawScript, APC_TTL);
            }
            echo $rawScript;
        } else {
            $rawCSS = '';
            $cssResourceList = $loader->css_data();
            foreach ($cssResourceList["css"] as $cssResource=>$val) {
                foreach($cssResourceList["css"][$cssResource] as $key=>$value) {
                     $crtResourceBase = substr($key, 0, strrpos($key, "/") + 1);
                     $crtResourceContent = $loader->getRemoteContent($key);
                     
                     //Handle image path corrections (order is important)
                     $crtResourceContent = preg_replace('/((url\()(\w+)(.*);)/', '${2}'. $crtResourceBase . '${3}${4}', $crtResourceContent); // subdirs (e.g) url(foo/foo.png)
                     $crtResourceContent = preg_replace('/(url\([^\.\/]\))+/', $crtResourceBase, $crtResourceContent); // just filename (e.g.) url(picker_mask.png)
                     $crtResourceContent = str_replace("url(/", "url($crtResourceBase", $crtResourceContent); // slash filename (e.g.) url(/whatever)
                     $crtResourceContent = preg_replace('/(\.\.\/)+/', $crtResourceBase, $crtResourceContent); // relative pathes (e.g.) url(../../foo.png)
                     $crtResourceContent = preg_replace_callback(
                                            '/AlphaImageLoader\(src=[\'"](.*?)[\'"]/',
                                            'alphaImageLoaderPathCorrection',
                                            $crtResourceContent
                                           ); // AlphaImageLoader relative pathes (e.g.) AlphaImageLoader(src='../../foo.png')
                     
                     $rawCSS .= $crtResourceContent;
                 }
            }
            
            //Cleanup build path dups caused by relative pathes that already included the build directory
            $rawCSS = str_replace("/build/build/", "/build/", $rawCSS);
            
            if (APC_AVAIL === true) {
                apc_store('combo:'.$queryString, $rawCSS, APC_TTL);
            }
            echo $rawCSS;
        }
    }
} else {
    die('<!-- No YUI modules defined! -->');
}

?>