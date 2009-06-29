<?php

error_reporting(E_ALL);

include("../loader.php");

// create the loader instance, this sets up the platform config as well,
// which we need right away because we are iterating the packages to
// generate a list of available modules.
$loader = new YAHOO_util_Loader();

$output  = "";
$checked = "";
$modules = null;

$moduletype = null;
$contenttype = null;

if (isset($_GET["module"])) {
    $modules = $_GET['module'];
} else { // show everything
    $modules = array();
    $keys = array_keys($loader->modules);
    sort($keys);
    foreach($keys as $name) {
        $modules[$name] = $name;
    }
    $loader->allowRollups = false;
}


// Module type is "css" for just css, "javascript" for just script
// otherwise everything is sent out.
    if ($modules) {
        if (isset($_GET["moduletype"])) {
            $moduletype = $_GET["moduletype"];

            // backwards compatible
            if ($moduletype == "YAHOO_util_CSS") {
                $moduletype = "css";
            } else if ($moduletype == "javascript") {
                $moduletype = "js";
            } else if ($moduletype == "YAHOO_util_JS") {
                $moduletype = "js";
            }
        }
    }

    if (isset($_GET["contenttype"])) {
        $contenttype = $_GET["contenttype"];
    }

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

    if (isset($_GET["canEmbed"])) {
        $canEmbed = true;
        $loader->canEmbed  = $canEmbed;
    }

    if (isset($_GET["loadOptional"])) {
        $loadOptional = true;
        $loader->loadOptional = $loadOptional;
    }

    $skipSort = false;


    if (isset($_GET["skipSort"]) && $_GET["skipSort"] == "true") {
        $skipSort = true;
        $loader->skipSort = true;
    }


    // tell the loader about each module requested
    foreach ($modules as $module) {
        //var_dump($module);
        $loader->load( $module );
    }

    $output = $loader->processDependencies($contenttype, $moduletype, $skipSort);


/*
if ($moduletype == "css") {
    $output = $loader -> css();
} else if ($moduletype == "script") {
    $output = $loader -> script();
} else if ($moduletype == "json") {
    $output = $loader -> script();
} else {
    $output = $loader -> tags();
}
*/

// $output = $loader->json();

if (!defined("SKIP_CONTENT_TYPE")) {
// if ($contenttype == "RAW") {
    if ($moduletype == "css") {
        header('Content-type: text/css');
    } else if ($moduletype == "js") {
        header('Content-type: text/javascript');
    } else {
        header('Content-type: text/plain');
    }
//}
}

// for twiki
if ($contenttype == "JSON") {
    // echo "var getJSON = function() { return $output };";
    $flat = join($modules, ",");
    echo "var json=$output;\n";
    echo "if (loaderCallback) {";
    echo "    loaderCallback(json, '$flat', '$moduletype');" ;
    echo "}";
} else {
    echo $output;
}
//echo($contenttype . ", " . $moduletype. ", " . $skipSort);
// echo htmlentities($output);
?>
