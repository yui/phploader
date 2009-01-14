<?php

error_reporting(E_ALL);

include("/home/y/share/pear/Yahoo/YUI/loader.php");

function verify($name, $url)  {

    // Initialize the session
    $session = curl_init($url);

    // Set curl options
    curl_setopt($session, CURLOPT_HEADER, true);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

    // Make the request
    $response = curl_exec($session);

    // Close the curl session
    curl_close($session);

    // Get HTTP Status code from the response
    $status_code = array();
    preg_match('/\d\d\d/', $response, $status_code);

    /*
        // Make the request
        $xml = file_get_contents($url);

        // Retrieve HTTP status code
        list($version,$status_code,$msg) = explode(' ',$http_response_header[0], 3);

    */
    if ($status_code[0] == 200) {
        print_r("<dt>". $name . ":</dt><dd>ok</dd>");
    } else {
        print_r("<dt>" . $name . ":</dt><dd>failed - " . $status_code[0] . ", " . $url ."</dd>");
    }
}

// create the loader instance, this sets up the platform config as well,
// which we need right away because we are iterating the packages to
// generate a list of available modules.
$loader = new YAHOO_util_Loader();

$output  = "";
$checked = "";
$modules = array();
//$target  = $yui_load_manager->LOCAL;
//$target  = $yui_load_manager->PROD;
//$target  = $yui_load_manager->DEBUG;
//$target  = $yui_load_manager->DEV;

$moduletype = null;
$contenttype = null;

// Module type is "css" for just css, "javascript" for just script
// otherwise everything is sent out.
if (isset($_GET["moduletype"])) {
    $moduletype = $_GET["moduletype"];

            if ($moduletype == "YAHOO_util_CSS") {
                $moduletype = "css";
            } else if ($moduletype == "javascript") {
                $moduletype = "js";
            } else if ($moduletype == "YAHOO_util_JS") {
                $moduletype = "js";
            }
}


// content type is "EMBED" to inline the files, otherwise links
// to the files are generated.  This is not implemented on the test
// page (we always generate links)
if (isset($_GET["contenttype"])) {
    $contenttype = $_GET["contenttype"];
}

// target is "PE_DEV", "PE_DEBUG" for the uncompressed or debug versions
// on makeover.corp, or "PE_PROD" for the minimized source on akamai
if (isset($_GET["target"])) {
    $target= $_GET["target"];
}

// set the target (dev or prod)
//$loader->target = $target;

    if (defined("OVERRIDE_BASE")) {
        $base= OVERRIDE_BASE;
        $loader->base = $base;
    } else if (isset($_GET["base"])) {
        $base= $_GET["base"];
        $loader->base = $base;
    }

    if (isset($_GET["filter"])) {
        $filter= $_GET["filter"];
        $loader->filter = $filter;
    }


if (isset($_GET["loadOptional"]) && $_GET["loadOptional"] == "true") {
    $loader->loadOptional = true;
}

$skipSort = false;

if (isset($_GET["skipSort"]) && $_GET["skipSort"] == "true") {
    $skipSort = true;
}

//if (isset($_GET["noRollups"]) && $_GET["noRollups"] == "true") {
    //$loader->setProcessedModuleType(null);
//}


// only generate script tags
$yui_load_manager->canEmbed = 
    ($contenttype == "EMBED" || $contenttype == "RAW");


if (isset($_GET["module"])) {
    $modules = $_GET['module'];
    foreach ($modules as $module) {
        //$loader -> load( $module );
       verify($name, $allmoddef->url);
    }
} else {
    // load everything
    print_r("Processing " . count($loader->modules));
   foreach ($loader->modules as $name=>$module) {
        //var_dump($module);
        verify($name, $loader->getUrl($name));
    }


}


// echo htmlentities($output);
?>
