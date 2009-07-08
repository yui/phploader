<?php
/**
 *  Copyright (c) 2009, Yahoo! Inc. All rights reserved.
 *  Code licensed under the BSD License:
 *  http://developer.yahoo.net/yui/license.html
 *  version: 1.0.0b1
 */
 
include("../loader.php");

$loader = new YAHOO_util_Loader();

$output = "";
$checked = "";
$modules = array();
$target = $yui_load_manager->PROD;

if (isset($_REQUEST["module"])) {

    $modules = $_REQUEST['module'];

    $moduletype = null;
    $contenttype = null;

    // Module type is "css" for just css, "script" for just script
    // otherwise everything is sent out.
    if (isset($_REQUEST["moduletype"])) {
        $moduletype = $_REQUEST["moduletype"];
    }

    // content type is "EMBED" to inline the files, otherwise links
    // to the files are generated.  This is not implemented on the test
    // page (we always generate links)
    if (isset($_REQUEST["contenttype"])) {
        $contenttype = $_REQUEST["contenttype"];
    }

    // target is "PE_DEV" or "PE_PROD" for makeover or akamai respectively
    if (isset($_REQUEST["target"])) {
        $target= $_REQUEST["target"];
    }

    // set the target (dev or prod)
    $loader -> target = $target;

    // tell the loader about each module requested
    foreach ($modules as $module) {
        $loader -> load( $module );
    }

    // get the output
    if ($moduletype == "css") {
        $output = $loader -> css();
    } else if ($moduletype == "script") {
        $output = $loader -> script();
    } else {
        //$output = $loader -> tags();
        //$output .= "<br>\n";
        //$output .= $loader -> getLoadedModulesAsJSON();
        $output = $loader -> json();
    }

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
<title>Yahoo UI Library Loader</title>

<style type="text/css">

    ul {
       list-style: none;
        padding: 2px;
    }

    pre {
        font-size:90%;
    }

    .content { 
        float: left; 
        margin: 2px;
        padding: 2px;
        border: 1px solid #333333;
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

<!-- The actual output after processing all of the dependencies -->
<?php echo $output ?>

</head>
<body>
<form method="post" name="mainform" action="json.php">


<!-- All of the modules, check the ones that are required -->
<div class="content" id="modulelist">
<ul>
<?php
    $i = 1;
    foreach($yui_load_manager->modules as $name => $allmoddef) {
        $checked = (array_search($name, $modules) !== false) ? "checked" : "";
        $id = "module$i" . $i++;
        echo ("<li><label for=\"$id\"><input id=\"$id\" type=\"checkbox\" name=\"module[]\" value=\"$name\" $checked />$name</label></li>");
    }
?>
</ul>

<hr />

<?php

    $dev = $yui_load_manager->DEV;
    $prod = $yui_load_manager->PROD;

    $devchecked = "";
    $prodchecked = "";

    if ($target == $prod) {
        $prodchecked = "checked";
    } else {
        $devchecked = "checked";
    }

?>

<label for="fordev"><input id="fordev"  type="radio" name="target" value="<?php echo $dev ?>"  <?php echo $devchecked ?> /> Dev</label>
<label for="forprod"><input id="forprod" type="radio" name="target" value="<?php echo $prod ?>" <?php echo $prodchecked ?> /> Prod</label>

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

