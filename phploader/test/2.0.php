<?php

include("/home/y/share/pear/Yahoo/YUI/loader.php");

function encoded_out($str) {
    echo (htmlentities($str));
}

$customConfig = array(
    "test1" => array(
        "name" => 'test1',
        "type" => 'js', // or 'css'
        "path" => 'path/to/file1.js', // includes base
        //"fullpath" => 'http://path/to/file1.js', // overrides path
        "requires" => array (0 => 'event', 1 => 'dom'),
        "optional" => array (0 => 'connection'),
        // "global" => true, // globals are always loaded
        // "supersedes" => array (0 => 'something'), // if a rollup
        // "rollup" => 3 // the rollup threshold
    ),
    "test2" => array(
        "name" => 'test2',
        "type" => 'js', // or 'css'
        "path" => 'path/to/file2.js', // includes base
        //"fullpath" => 'http://path/to/file2.js', // overrides path
        "requires" => array (0 => 'test1'),
        // "global" => true // globals are always loadede,
        // "supersedes" => array (0 => 'something'), // if a rollup
        // "rollup" => 3 // the rollup threshold
    ),
    "test3" => array(
        "name" => 'test3',
        "type" => 'js', // or 'css'
        "path" => 'path/to/file3.js', // includes base
        //"fullpath" => 'http://path/to/file3.js', // overrides path
        "global" => true, // globals are always loaded
        // "supersedes" => array (0 => 'something'), // if a rollup
        // "rollup" => 3 // the rollup threshold
    )
);

// arg1: Unique APC cache key.  This is combined with the YUI base
//       so that updates to YUI will force a new cache entry.
//       However, if your custom config changes, this key should
//       be changed (otherwise the old values will be used until
//       the cache expires --- currently set to 30 minutes).
// arg2: a list of custom modules
// arg3: pass true if you do not want the YUI metadata
$loader = new YAHOO_util_Loader('config_v_2', $customConfig);

// What to load
$loader->load("menu", "animation", "test2");

// Automatically pull in optional dependencies
// $loader->loadOptional = true;

// Specify modules that are already on the page that should not
// be loaded again.
// $loader->setLoaded("event", "dom");
// $loader->setLoaded("yahoo-dom-event"); // bug 1081006

// The base will be combined with the module's 'path' attribute
// to create its URL, unless the module has a 'fullpath' attribute.
// The default is the path to the current YUI version yahooapis
$loader->base = "/build/";

// Configure the base dir for a set of modules.  This overrides
// the global base property
$loader->overrideBase("/otherbasedir/", $customConfig);

// No filter is applied by default.  YUI_RAW ("RAW") and YUI_DEBUG 
// ("DEBUG") are currently the only valid options.  The former will
// try to get the non-minimized, non-debug version, and the latter
// will get the debug version.
$loader->filter = YUI_DEBUG;

// Set allowRollups to false to prevent automatic rollup.
// $loader->allowRollups = false;

// A list of modules to apply the filter to.  If not supplied, all
// modules will have any defined filters applied.  This can be useful
// when debugging, limiting the amount of noise YUI generates.
// $loader->filterList = array(
        // "dragdrop" => true
   // );

// If the version is set, a querystring parameter is appended to the
// end of all generated URLs.  This is a cache busting hack for environments
// that always use the same path for the current version of the library.
// $loader->version = "2.4.0";

encoded_out($loader->tags());

// Alternatively, separate calls for css and js
// encoded_out($loader->css());
// print_r('<p>-----------------------------------------------------</p>');
// encoded_out($loader->script());

// JSON output
// encoded_out($loader->json()); // new data struct, bug 1567133

// Just get the data (same struct that json() outputs) as an array
// encoded_out(var_export($loader->data(), true));

print_r('<p>-----------------------------------------------------</p>');

encoded_out($loader->getLoadedModulesAsJSON()); // new data struct, bug 1567133

print_r('<p>-----------------------------------------------------</p>');

encoded_out(var_export($loader->getLoadedModules(), true)); // bug 1512927

?>
