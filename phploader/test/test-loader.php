<?php

//error_reporting(E_ALL);

include("/home/y/share/pear/Yahoo/YUI/loader.php");

// create the loader instance, this sets up the platform config as well,
// which we need right away because we are iterating the packages to
// generate a list of available modules.
$loader = new YAHOO_util_Loader();

$output  = "";
$checked = "";
$modules = array();
$embed = false;
$loadOptional = false;
$combine = false;

if (isset($_GET["module"])) {

    $modules = $_GET['module'];
    $moduletype = null;
    $contenttype = "TAGS";

    // Module type is "css" for just css, "script" for just script
    // otherwise everything is sent out.
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

    if (isset($_GET["contenttype"])) {
        $contenttype = $_GET["contenttype"];
    }

    // content type is "EMBED" to inline the files, otherwise links to the files are generated.
    if (isset($_GET["embed"])) {
        $contenttype = "EMBED";
        $embed = true;
    }

    if (isset($_GET["base"])) {
        $base= $_GET["base"];
        $loader->base = $base;
    }

    if (isset($_GET["comboBase"]) && !empty($_GET["comboBase"])) {
        $comboBase= $_GET["comboBase"];
        $loader->comboBase = $comboBase;
    } else {
        $comboBase= 'http://yui.yahooapis.com/combo?2.7.0/build/';
        $loader->comboBase = $comboBase;
    }

    if (isset($_GET["filter"])) {
        $filter= $_GET["filter"];
        $loader->filter = $filter;
    }

    if (isset($_GET["combine"])) {
        $combine = true;
    }

    if (isset($_GET["loadOptional"])) {
        $loadOptional = true;
    }

    $loader->combine = $combine;
    $loader->loadOptional = $loadOptional;

    // tell the loader about each module requested
    foreach ($modules as $module) {
        $loader->load( $module );
    }

    $output = $loader->processDependencies($contenttype, $moduletype);

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Yahoo UI Library Loader</title>

<style type="text/css">


    pre {
        font-size:90%;
    }

    .content { 
        float: left; 
        margin: 2px;
        padding: 2px;
        border: 1px solid #333333;
    }

    .content ul {
        list-style: none;
        padding: 2px;
        font-size: 86%;
    }

    .content input {
        padding: 0;
        margin: 2px;
    }

    #modulelist {
        width:150px;
    }

    #codewindow {
        overflow: auto;
        height: 524px;
        width: 80%;
    }

</style>

<?php 
//The actual output after processing all of the dependencies
//echo $output; 
?> 

</head>
<body>
<form name="mainform" action="<?php echo getenv("REQUEST_URI"); ?>">

<!-- All of the modules, check the ones that are required -->
<div class="content" id="modulelist">
<ul>
<?php
    $i = 1;
    //$keys = sort(array_keys($yui_load_manager->modules));
    //foreach($loader->modules as $name => $allmoddef) {
    //foreach($keys as $name => $allmoddef) {
    $keys = array_keys($loader->modules);
    sort($keys);
    foreach($keys as $name) {
        $checked = (array_search($name, $modules) !== false) ? "checked" : "";
        $id = "module$i" . $i++;
        echo ("<li><label for=\"$id\"><input id=\"$id\" type=\"checkbox\" name=\"module[]\" value=\"$name\" $checked />$name</label></li>");
    }
?>
</ul>

<hr />

<?php

    $prodchecked = "";
    $debugchecked = "";
    $combinechecked = "";
    $embedchecked = "";
    $loadOptionalchecked = "";

    // if ($target == $prod) {
        // $prodchecked = "checked";
    // } else if ($target == $debug) {
        // $debugchecked = "checked";
    // } else if ($target == $local) {
        // $localchecked = "checked";
    // } else {
        // $devchecked = "checked";
    // }

    if ($combine) {
        $combinechecked = "checked";
    }

    if ($embed) {
        $embedchecked = "checked";
    }

    if ($loadOptional) {
        $loadOptionalchecked = "checked";
    }

?>

<p>
<label>Base:</label><br />
<input id="base" type="text" name="base" value="<?php echo $loader->base; ?>"  size="15"/>
</p>

<p>
<label>Combo Base:</label><br />
<input id="base" type="text" name="comboBase" value="<?php echo $loader->comboBase; ?>"  size="15"/>
</p>

<p>
<select id="filter" name="filter">
  <option value="" <?php if (!$loader->filter) echo "selected"; ?>>None</option>
  <option value="RAW" <?php if ($loader->filter == "RAW") echo "selected"; ?>>RAW</option>
  <option value="DEBUG" <?php if ($loader->filter == "DEBUG") echo "selected"; ?>>DEBUG</option>
</select>
</p>

<p>
<input type="checkbox" name="combine" value="1" <?php echo $combine; ?> />
Use Combo Loader
</p>

<p>
<input type="checkbox" name="embed" value="1" <?php echo $embedchecked; ?> />
Embed enabled
</p>

<p>
<input type="checkbox" name="loadOptional" value="1" <?php echo $loadOptionalchecked; ?> />
Load Optional
</p>

<hr />

<input type="submit" name="subbut" value="Get Dependencies" />

</div>

<!-- Encoded loader output for easy reading -->
<div class="content" id="codewindow">
    <pre><?php echo htmlentities($output); ?></pre>
</div>

</form>
</body>
</html>
