<?php
/*
* This script servers as a local replacement for the remote YUI combo handler
* Each version of YUI you intend to support must be setup in the yui_loader directory
* A valid setup will look something like yui_loader/2.7.0/build, yui_loader/2.6.0/build, etc.
*
* Additional Setup Note: 
* If the yui_loader directory does not live webservers root folder then modify $pathToYUILoader accordingly
*/

include("/home/y/share/pear/Yahoo/YUI/loader.php");
$loader = new YAHOO_util_Loader();

$pathToYUILoader = server() . "/yui_loader/"; //Web accessible path to the YUI loader directory (Override as needed)
$base = $pathToYUILoader . $loader->comboDefaultVersion; //Defaults to current version

//server(): Computes the base URL of the current page (protocol, server, path)
//credit: http://code.google.com/p/simple-php-framework/ (modified version of full_url), license: MIT
function server()
{
    $s = getenv('HTTPS') ? '' : (getenv('HTTPS') == 'on') ? 's' : '';
    $protocol = substr(strtolower(getenv('SERVER_PROTOCOL')), 0, strpos(strtolower(getenv('SERVER_PROTOCOL')), '/')) . $s;
    $port = (getenv('SERVER_PORT') == '80') ? '' : (":".getenv('SERVER_PORT'));
    return $protocol . "://" . getenv('HTTP_HOST') . $port;
}

$queryString = getenv('QUERY_STRING') ? urldecode(getenv('QUERY_STRING')) : '';
if (isset($queryString) && !empty($queryString)) {
    $yuiFiles    = explode("&amp;", $queryString);
    $contentType = strpos($yuiFiles[0], ".js") ? 'application/x-javascript' : ' text/css';

    //Detect and load the required components now
    $baseOverrides = array();
    $yuiComponents = array();
    foreach($yuiFiles as $yuiFile) {
        $parts = explode("/", $yuiFile);
        if (isset($parts[0]) && isset($parts[1]) && isset($parts[2])) {
            //Add module to array for loading
            $yuiComponents[] = $parts[2];
            //Check for and setup base overrides as needed
            $tmpbase = $pathToYUILoader . $parts[0] . '/' . $parts[1] . '/';
            if ($tmpbase != $base) {
                $baseOverrides[$tmpbase][$parts[2]] = $parts[2];
            }
        } else {
           die('<!-- Unable to determine module name! -->');
        }
    }
    
    //Do base overrides if required
    if (!empty($baseOverrides)) {
        foreach($baseOverrides as $baseOverride=>$modules) {
            call_user_func_array(array($loader, 'overrideBase'), array($baseOverride, $modules));
        }
    }
    
    //Load the components
    call_user_func_array(array($loader, 'load'), $yuiComponents);

    //Set cache headers and output raw file content
    header("Cache-Control: max-age=315360000");
    header("Expires: " . date("D, j M Y H:i:s", strtotime("now + 10 years")) ." GMT");
    header("Content-Type: " . $contentType);
    if ($contentType == "application/x-javascript") {
        echo $loader->script_raw();
    } else {
        echo $loader->css_raw();
    }
    
} else {
    die('<!-- No YUI modules defined! -->');
}

?>