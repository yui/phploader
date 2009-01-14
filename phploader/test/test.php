<?php

// header('Content-type: text/ascii');

include("/home/y/share/pear/Yahoo/YUI/loader.php");

function encoded_out($str) {
    echo (htmlentities($str));
}


//////////////////////////////////////////////////////////////////////////
// Testing the loader
//////////////////////////////////////////////////////////////////////////
//$yui_load_manager->canEmbed = false;

encoded_out ("\n\nTest 1a:\n\n");

$l1 = new YAHOO_util_Loader();
$l1->load("dragdrop");

encoded_out ($l1->tags());

/* Drag and drop requires position and event: */

encoded_out ("\n\nTest 1b:\n\n");

$l1->load("animation");
encoded_out ($l1->tags());

/* More packages can be added to the page, and tags will only return
packages not already included.

<script type="text/javascript" src="/common/utils/animation_1.1.0.js" />

*/

//////////////////////////////////////////////////////////////////////////

encoded_out ("\n\nTest 2:\n\n");

$l2 = new YAHOO_util_Loader();
$l2->load("event");
$l2->base = "http://makeover.corp.yahoo.com/2.4.0/build/";
encoded_out ($l2->tags());

/* Changed the base from the default of production to DEV.  */

//////////////////////////////////////////////////////////////////////////

encoded_out ("\n\nTest 3:\n\n");

$l3 = new YAHOO_util_Loader();
$l3->load("dragdrop");
$l3->load("utilities");
encoded_out ($l3->tags());


/* The util package supercedes drag and drop and its dependencies.  Since util 
was included, dragdrop, position, and event are omitted.

*/

//////////////////////////////////////////////////////////////////////////

encoded_out ("\n\nTest 4:\n\n");

$l4 = new YAHOO_util_Loader();
$l4->load("dragdrop");
$l4->load("animation");
$l4->load("connection");
encoded_out ($l4->tags());

/* By including drag and drop and animation, four utilities are required:
dragdrop, postion, event, and animation.  This meets the meta-package
threshold set for the util package, so util is loaded instead of the four
individual packages even though it wasn't requested directly.

*/

//////////////////////////////////////////////////////////////////////////

encoded_out ("\n\nTest 4b:\n\n");

$l4b =  new YAHOO_util_Loader();
$l4b->load("dragdrop", "animation");
$l4b->setLoaded("event", "dom");
encoded_out ( $l4b -> tags() );

/*
    setLoaded is used to specify preloaded modules, and prevent rollups
*/

//////////////////////////////////////////////////////////////////////////

encoded_out ("\n\nTest 5:\n\n");

$l5 = new YAHOO_util_Loader();
$l5->load("slider");
encoded_out ($l5->tags());

/* The slider requires drag and drop, which requires postion and event. */

//////////////////////////////////////////////////////////////////////////

encoded_out ("\n\nTest 6:\n\n");

$l6 = new YAHOO_util_Loader();
$l6->loadOptional = true;
//var_dump($yui_load_manager->modules["slider"]);

//print_r($yui_load_manager->modules["slider"]->getAllDependencies(null, true));

$l6->load("slider");
encoded_out ($l6->tags());

/* The slider optionally uses animation. testing loadoptional*/

//////////////////////////////////////////////////////////////////////////

encoded_out ("\n\nTest 6b:\n\n");

$l6b = new YAHOO_util_Loader();
$l6b->loadOptional = true;
$l6b->load("slider", "connection");
encoded_out ($l6b->tags());

/* same as 6, but we add connection to trigger the utilities rollup */


//////////////////////////////////////////////////////////////////////////

encoded_out ("\n\nTest 7:\n\n");

$l7 = new YAHOO_util_Loader();
$l7->load('editor');
$l7->skin['overrides']['button'] = array('skin1', 'skin2', 'skin3');
encoded_out ($l7->tags());

/* The loader can be configured to support more than just javascript files.  */

//////////////////////////////////////////////////////////////////////////

encoded_out ("\n\nTest 8:\n\n");

$l8 = new YAHOO_util_Loader();
$l8->load("treeview");
$l8->load("treeviewcss");
$l8->setLoaded("skin-sam-treeview");
encoded_out ("<!-- css -->\n");
encoded_out ($l8->css());
encoded_out ("<!-- js -->\n");
encoded_out ($l8->script());

/* separate css and js output */

//////////////////////////////////////////////////////////////////////////
encoded_out ("\n\nTest 9:\n\n");


$l9 = new YAHOO_util_Loader();
$l9->load("calendar");
encoded_out ($l9->json());

/* json */

//////////////////////////////////////////////////////////////////////////
encoded_out ("\n\nTest 10:\n\n");

$l10 = new YAHOO_util_Loader();

$l10->load("calendar");
encoded_out ($l10->embed());

///////////////////////////////////////////
encoded_out ("\n\nTest 11:\n\n");

//$yui_config->configDebug(array(
    //"menu" => true
//));

$l11 = new YAHOO_util_Loader();
$l11->base = "../../build/";
$l11->filter = YUI_DEBUG;

$l11->load("menu");
encoded_out ($l11->tags());


encoded_out ($l11->getLoadedModulesAsJSON());

/* embed */

?>

