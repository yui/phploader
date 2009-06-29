<?php
/**
 *  Copyright (c) 2009, Yahoo! Inc. All rights reserved.
 *  Code licensed under the BSD License:
 *  http://developer.yahoo.net/yui/license.html
 *  version: 1.0.0b1
 */

/**
 * This is a compatibility layer that can be used for yui_loader configuration files 
 * created for versions prior to < 1.2.5.  Prior to 1.2.5, yui_loader only supported 
 * php5.  Globals had to be rewired for php4 compatibility.  Obviously, don't include 
 * this file on php4 systems.
 */

class YAHOO_util_LoadManager {

    // constants for the default targets
    const LOCAL = 'PE-LOCAL'; // Local box
    const DEV   = 'PE-DEV';   // makeover.corp
    const DEBUG = 'PE-DEBUG'; // makeover.corp with debug filter
    const PROD  = 'PE-PROD';  // Akamai

    // known script paths
    public static $paths = array();
    // known modules
    public static $modules = array();
    // meta modules
    public static $rollupModules = array();
    // global dependencies
    public static $globalDependencies = array();
    // global config for allowing embed
    public static $canEmbed = true;

    function addGlobalDependency($module) {
        global $yui_load_manager;
        $yui_load_manager->addGlobalDependency($module);
    }

    function getGlobalDependencies($moduleType=null) {
        global $yui_load_manager;
        $yui_load_manager->getGlobalDependencies($module);
    }

    function init() {
        global $yui_load_manager;
        YAHOO_util_LoadManager::$paths =& $yui_load_manager->paths;
        YAHOO_util_LoadManager::$modules =& $yui_load_manager->modules;
        YAHOO_util_LoadManager::$rollupModules =& $yui_load_manager->rollupModules;
        YAHOO_util_LoadManager::$globalDependencies =& $yui_load_manager->globalDependencies;
    }
}

YAHOO_util_LoadManager::init();

?>
