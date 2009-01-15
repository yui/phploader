<?php $GLOBALS['yui_current'] = array (
  'base' => 'http://yui.yahooapis.com/3.0.0b1/build/',
  'moduleInfo' => 
  array (
    'anim' => 
    array (
      'ext' => false,
      'name' => 'anim',
      'path' => 'anim/anim-min.js',
      'requires' => 
      array (
        0 => 'base',
        1 => 'node',
      ),
      'rollup' => 4,
      'submodules' => 
      array (
        'anim-base' => 
        array (
          'ext' => false,
          'name' => 'anim-base',
          'path' => 'anim/anim-base-min.js',
          'requires' => 
          array (
            0 => 'base',
            1 => 'node-style',
          ),
          'type' => 'js',
        ),
        'anim-color' => 
        array (
          'ext' => false,
          'name' => 'anim-color',
          'path' => 'anim/anim-color-min.js',
          'requires' => 
          array (
            0 => 'anim-base',
          ),
          'type' => 'js',
        ),
        'anim-curve' => 
        array (
          'ext' => false,
          'name' => 'anim-curve',
          'path' => 'anim/anim-curve-min.js',
          'requires' => 
          array (
            0 => 'anim-xy',
          ),
          'type' => 'js',
        ),
        'anim-easing' => 
        array (
          'ext' => false,
          'name' => 'anim-easing',
          'path' => 'anim/anim-easing-min.js',
          'requires' => 
          array (
          ),
          'type' => 'js',
        ),
        'anim-node-plugin' => 
        array (
          'ext' => false,
          'name' => 'anim-node-plugin',
          'path' => 'anim/anim-node-plugin-min.js',
          'requires' => 
          array (
            0 => 'node',
            1 => 'anim-base',
          ),
          'type' => 'js',
        ),
        'anim-scroll' => 
        array (
          'ext' => false,
          'name' => 'anim-scroll',
          'path' => 'anim/anim-scroll-min.js',
          'requires' => 
          array (
            0 => 'anim-base',
          ),
          'type' => 'js',
        ),
        'anim-xy' => 
        array (
          'ext' => false,
          'name' => 'anim-xy',
          'path' => 'anim/anim-xy-min.js',
          'requires' => 
          array (
            0 => 'anim-base',
            1 => 'node-screen',
          ),
          'type' => 'js',
        ),
      ),
      'supersedes' => 
      array (
        0 => 'anim-color',
        1 => 'anim-scroll',
        2 => 'anim-node-plugin',
        3 => 'anim-base',
        4 => 'anim-curve',
        5 => 'anim-easing',
        6 => 'anim-xy',
      ),
      'type' => 'js',
    ),
    'anim-base' => 
    array (
      'ext' => false,
      'name' => 'anim-base',
      'path' => 'anim/anim-base-min.js',
      'requires' => 
      array (
        0 => 'base',
        1 => 'node-style',
      ),
      'type' => 'js',
    ),
    'anim-color' => 
    array (
      'ext' => false,
      'name' => 'anim-color',
      'path' => 'anim/anim-color-min.js',
      'requires' => 
      array (
        0 => 'anim-base',
      ),
      'type' => 'js',
    ),
    'anim-curve' => 
    array (
      'ext' => false,
      'name' => 'anim-curve',
      'path' => 'anim/anim-curve-min.js',
      'requires' => 
      array (
        0 => 'anim-xy',
      ),
      'type' => 'js',
    ),
    'anim-easing' => 
    array (
      'ext' => false,
      'name' => 'anim-easing',
      'path' => 'anim/anim-easing-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
    'anim-node-plugin' => 
    array (
      'ext' => false,
      'name' => 'anim-node-plugin',
      'path' => 'anim/anim-node-plugin-min.js',
      'requires' => 
      array (
        0 => 'node',
        1 => 'anim-base',
      ),
      'type' => 'js',
    ),
    'anim-scroll' => 
    array (
      'ext' => false,
      'name' => 'anim-scroll',
      'path' => 'anim/anim-scroll-min.js',
      'requires' => 
      array (
        0 => 'anim-base',
      ),
      'type' => 'js',
    ),
    'anim-xy' => 
    array (
      'ext' => false,
      'name' => 'anim-xy',
      'path' => 'anim/anim-xy-min.js',
      'requires' => 
      array (
        0 => 'anim-base',
        1 => 'node-screen',
      ),
      'type' => 'js',
    ),
    'attribute' => 
    array (
      'ext' => false,
      'name' => 'attribute',
      'path' => 'attribute/attribute-min.js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'type' => 'js',
    ),
    'base' => 
    array (
      'ext' => false,
      'name' => 'base',
      'path' => 'base/base-min.js',
      'requires' => 
      array (
        0 => 'attribute',
      ),
      'type' => 'js',
    ),
    'classnamemanager' => 
    array (
      'ext' => false,
      'name' => 'classnamemanager',
      'path' => 'classnamemanager/classnamemanager-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
    'compat' => 
    array (
      'ext' => false,
      'name' => 'compat',
      'path' => 'compat/compat-min.js',
      'requires' => 
      array (
        0 => 'node',
        1 => 'dump',
        2 => 'substitute',
      ),
      'type' => 'js',
    ),
    'console' => 
    array (
      'ext' => false,
      'name' => 'console',
      'path' => 'console/console-min.js',
      'requires' => 
      array (
        0 => 'widget',
        1 => 'substitute',
        2 => 'skin-sam-console',
      ),
      'skinnable' => true,
      'type' => 'js',
    ),
    'cookie' => 
    array (
      'ext' => false,
      'name' => 'cookie',
      'path' => 'cookie/cookie-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
    'cssbase' => 
    array (
      'after' => 
      array (
        0 => 'cssreset',
        1 => 'cssfonts',
        2 => 'cssgrids',
        3 => 'cssreset-context',
        4 => 'cssfonts-context',
        5 => 'cssgrids-context',
      ),
      'ext' => false,
      'name' => 'cssbase',
      'path' => 'cssbase/base-min.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'cssbase-context' => 
    array (
      'after' => 
      array (
        0 => 'cssreset',
        1 => 'cssfonts',
        2 => 'cssgrids',
        3 => 'cssreset-context',
        4 => 'cssfonts-context',
        5 => 'cssgrids-context',
      ),
      'ext' => false,
      'name' => 'cssbase-context',
      'path' => 'cssbase/base-context-min.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'cssfonts' => 
    array (
      'ext' => false,
      'name' => 'cssfonts',
      'path' => 'cssfonts/fonts-min.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'cssfonts-context' => 
    array (
      'ext' => false,
      'name' => 'cssfonts-context',
      'path' => 'cssfonts/fonts-context-min.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'cssgrids' => 
    array (
      'ext' => false,
      'name' => 'cssgrids',
      'optional' => 
      array (
        0 => 'cssreset',
      ),
      'path' => 'cssgrids/grids-min.css',
      'requires' => 
      array (
        0 => 'cssfonts',
      ),
      'type' => 'css',
    ),
    'cssgrids-context' => 
    array (
      'ext' => false,
      'name' => 'cssgrids-context',
      'optional' => 
      array (
        0 => 'cssreset-context',
      ),
      'path' => 'cssgrids/grids-context-min.css',
      'requires' => 
      array (
        0 => 'cssfonts-context',
      ),
      'type' => 'css',
    ),
    'cssreset' => 
    array (
      'ext' => false,
      'name' => 'cssreset',
      'path' => 'cssreset/reset-min.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'cssreset-context' => 
    array (
      'ext' => false,
      'name' => 'cssreset-context',
      'path' => 'cssreset/reset-context-min.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'dd' => 
    array (
      'ext' => false,
      'name' => 'dd',
      'path' => 'dd/dd-min.js',
      'requires' => 
      array (
      ),
      'rollup' => 4,
      'submodules' => 
      array (
        'dd-constrain' => 
        array (
          'ext' => false,
          'name' => 'dd-constrain',
          'path' => 'dd/dd-constrain-min.js',
          'requires' => 
          array (
            0 => 'dd-drag',
            1 => 'dd-proxy',
          ),
          'type' => 'js',
        ),
        'dd-ddm' => 
        array (
          'ext' => false,
          'name' => 'dd-ddm',
          'path' => 'dd/dd-ddm-min.js',
          'requires' => 
          array (
            0 => 'dd-ddm-base',
          ),
          'type' => 'js',
        ),
        'dd-ddm-base' => 
        array (
          'ext' => false,
          'name' => 'dd-ddm-base',
          'path' => 'dd/dd-ddm-base-min.js',
          'requires' => 
          array (
            0 => 'node',
            1 => 'base',
          ),
          'type' => 'js',
        ),
        'dd-ddm-drop' => 
        array (
          'ext' => false,
          'name' => 'dd-ddm-drop',
          'path' => 'dd/dd-ddm-drop-min.js',
          'requires' => 
          array (
            0 => 'dd-ddm',
          ),
          'type' => 'js',
        ),
        'dd-drag' => 
        array (
          'ext' => false,
          'name' => 'dd-drag',
          'path' => 'dd/dd-drag-min.js',
          'requires' => 
          array (
            0 => 'dd-ddm-base',
          ),
          'type' => 'js',
        ),
        'dd-drop' => 
        array (
          'ext' => false,
          'name' => 'dd-drop',
          'path' => 'dd/dd-drop-min.js',
          'requires' => 
          array (
            0 => 'dd-ddm-drop',
          ),
          'type' => 'js',
        ),
        'dd-drop-plugin' => 
        array (
          'ext' => false,
          'name' => 'dd-drop-plugin',
          'path' => 'dd/dd-drop-plugin-min.js',
          'requires' => 
          array (
            0 => 'dd-drop',
          ),
          'type' => 'js',
        ),
        'dd-plugin' => 
        array (
          'ext' => false,
          'name' => 'dd-plugin',
          'optional' => 
          array (
            0 => 'dd-constrain',
            1 => 'dd-proxy',
          ),
          'path' => 'dd/dd-plugin-min.js',
          'requires' => 
          array (
            0 => 'dd-drag',
          ),
          'type' => 'js',
        ),
        'dd-proxy' => 
        array (
          'ext' => false,
          'name' => 'dd-proxy',
          'path' => 'dd/dd-proxy-min.js',
          'requires' => 
          array (
            0 => 'dd-drag',
          ),
          'type' => 'js',
        ),
      ),
      'supersedes' => 
      array (
        0 => 'dd-drop-plugin',
        1 => 'dd-constrain',
        2 => 'dd-proxy',
        3 => 'dd-ddm',
        4 => 'dd-ddm-drop',
        5 => 'dd-ddm-base',
        6 => 'dd-plugin',
        7 => 'dd-drag',
        8 => 'dd-drop',
      ),
      'type' => 'js',
    ),
    'dd-constrain' => 
    array (
      'ext' => false,
      'name' => 'dd-constrain',
      'path' => 'dd/dd-constrain-min.js',
      'requires' => 
      array (
        0 => 'dd-drag',
        1 => 'dd-proxy',
      ),
      'type' => 'js',
    ),
    'dd-ddm' => 
    array (
      'ext' => false,
      'name' => 'dd-ddm',
      'path' => 'dd/dd-ddm-min.js',
      'requires' => 
      array (
        0 => 'dd-ddm-base',
      ),
      'type' => 'js',
    ),
    'dd-ddm-base' => 
    array (
      'ext' => false,
      'name' => 'dd-ddm-base',
      'path' => 'dd/dd-ddm-base-min.js',
      'requires' => 
      array (
        0 => 'node',
        1 => 'base',
      ),
      'type' => 'js',
    ),
    'dd-ddm-drop' => 
    array (
      'ext' => false,
      'name' => 'dd-ddm-drop',
      'path' => 'dd/dd-ddm-drop-min.js',
      'requires' => 
      array (
        0 => 'dd-ddm',
      ),
      'type' => 'js',
    ),
    'dd-drag' => 
    array (
      'ext' => false,
      'name' => 'dd-drag',
      'path' => 'dd/dd-drag-min.js',
      'requires' => 
      array (
        0 => 'dd-ddm-base',
      ),
      'type' => 'js',
    ),
    'dd-drop' => 
    array (
      'ext' => false,
      'name' => 'dd-drop',
      'path' => 'dd/dd-drop-min.js',
      'requires' => 
      array (
        0 => 'dd-ddm-drop',
      ),
      'type' => 'js',
    ),
    'dd-drop-plugin' => 
    array (
      'ext' => false,
      'name' => 'dd-drop-plugin',
      'path' => 'dd/dd-drop-plugin-min.js',
      'requires' => 
      array (
        0 => 'dd-drop',
      ),
      'type' => 'js',
    ),
    'dd-plugin' => 
    array (
      'ext' => false,
      'name' => 'dd-plugin',
      'optional' => 
      array (
        0 => 'dd-constrain',
        1 => 'dd-proxy',
      ),
      'path' => 'dd/dd-plugin-min.js',
      'requires' => 
      array (
        0 => 'dd-drag',
      ),
      'type' => 'js',
    ),
    'dd-proxy' => 
    array (
      'ext' => false,
      'name' => 'dd-proxy',
      'path' => 'dd/dd-proxy-min.js',
      'requires' => 
      array (
        0 => 'dd-drag',
      ),
      'type' => 'js',
    ),
    'dom' => 
    array (
      'ext' => false,
      'name' => 'dom',
      'path' => 'dom/dom-min.js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'rollup' => 3,
      'submodules' => 
      array (
        'dom-base' => 
        array (
          'ext' => false,
          'name' => 'dom-base',
          'path' => 'dom/dom-base-min.js',
          'requires' => 
          array (
            0 => 'event',
          ),
          'type' => 'js',
        ),
        'dom-screen' => 
        array (
          'ext' => false,
          'name' => 'dom-screen',
          'path' => 'dom/dom-screen-min.js',
          'requires' => 
          array (
            0 => 'dom-base',
            1 => 'dom-style',
          ),
          'type' => 'js',
        ),
        'dom-style' => 
        array (
          'ext' => false,
          'name' => 'dom-style',
          'path' => 'dom/dom-style-min.js',
          'requires' => 
          array (
            0 => 'dom-base',
          ),
          'type' => 'js',
        ),
        'selector' => 
        array (
          'ext' => false,
          'name' => 'selector',
          'path' => 'dom/selector-min.js',
          'requires' => 
          array (
            0 => 'dom-base',
          ),
          'type' => 'js',
        ),
      ),
      'supersedes' => 
      array (
        0 => 'dom-screen',
        1 => 'dom-base',
        2 => 'dom-style',
        3 => 'selector',
      ),
      'type' => 'js',
    ),
    'dom-base' => 
    array (
      'ext' => false,
      'name' => 'dom-base',
      'path' => 'dom/dom-base-min.js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'type' => 'js',
    ),
    'dom-screen' => 
    array (
      'ext' => false,
      'name' => 'dom-screen',
      'path' => 'dom/dom-screen-min.js',
      'requires' => 
      array (
        0 => 'dom-base',
        1 => 'dom-style',
      ),
      'type' => 'js',
    ),
    'dom-style' => 
    array (
      'ext' => false,
      'name' => 'dom-style',
      'path' => 'dom/dom-style-min.js',
      'requires' => 
      array (
        0 => 'dom-base',
      ),
      'type' => 'js',
    ),
    'dump' => 
    array (
      'ext' => false,
      'name' => 'dump',
      'path' => 'dump/dump-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
    'event' => 
    array (
      'ext' => false,
      'name' => 'event',
      'path' => 'event/event-min.js',
      'requires' => 
      array (
        0 => 'oop',
      ),
      'type' => 'js',
    ),
    'get' => 
    array (
      'ext' => false,
      'name' => 'get',
      'path' => 'get/get-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
    ),
    'io' => 
    array (
      'ext' => false,
      'name' => 'io',
      'path' => 'io/io-min.js',
      'requires' => 
      array (
      ),
      'rollup' => 4,
      'submodules' => 
      array (
        'io-base' => 
        array (
          'ext' => false,
          'name' => 'io-base',
          'path' => 'io/io-base-min.js',
          'requires' => 
          array (
            0 => 'node',
          ),
          'type' => 'js',
        ),
        'io-form' => 
        array (
          'ext' => false,
          'name' => 'io-form',
          'path' => 'io/io-form-min.js',
          'requires' => 
          array (
            0 => 'io-base',
          ),
          'type' => 'js',
        ),
        'io-queue' => 
        array (
          'ext' => false,
          'name' => 'io-queue',
          'path' => 'io/io-queue-min.js',
          'requires' => 
          array (
            0 => 'io-base',
          ),
          'type' => 'js',
        ),
        'io-upload-iframe' => 
        array (
          'ext' => false,
          'name' => 'io-upload-iframe',
          'path' => 'io/io-upload-iframe-min.js',
          'requires' => 
          array (
            0 => 'io-base',
          ),
          'type' => 'js',
        ),
        'io-xdr' => 
        array (
          'ext' => false,
          'name' => 'io-xdr',
          'path' => 'io/io-xdr-min.js',
          'requires' => 
          array (
            0 => 'io-base',
          ),
          'type' => 'js',
        ),
      ),
      'supersedes' => 
      array (
        0 => 'io-queue',
        1 => 'io-upload-iframe',
        2 => 'io-base',
        3 => 'io-form',
        4 => 'io-xdr',
      ),
      'type' => 'js',
    ),
    'io-base' => 
    array (
      'ext' => false,
      'name' => 'io-base',
      'path' => 'io/io-base-min.js',
      'requires' => 
      array (
        0 => 'node',
      ),
      'type' => 'js',
    ),
    'io-form' => 
    array (
      'ext' => false,
      'name' => 'io-form',
      'path' => 'io/io-form-min.js',
      'requires' => 
      array (
        0 => 'io-base',
      ),
      'type' => 'js',
    ),
    'io-queue' => 
    array (
      'ext' => false,
      'name' => 'io-queue',
      'path' => 'io/io-queue-min.js',
      'requires' => 
      array (
        0 => 'io-base',
      ),
      'type' => 'js',
    ),
    'io-upload-iframe' => 
    array (
      'ext' => false,
      'name' => 'io-upload-iframe',
      'path' => 'io/io-upload-iframe-min.js',
      'requires' => 
      array (
        0 => 'io-base',
      ),
      'type' => 'js',
    ),
    'io-xdr' => 
    array (
      'ext' => false,
      'name' => 'io-xdr',
      'path' => 'io/io-xdr-min.js',
      'requires' => 
      array (
        0 => 'io-base',
      ),
      'type' => 'js',
    ),
    'json' => 
    array (
      'expanded' => 
      array (
        0 => 'json-parse',
        1 => 'json-stringify',
      ),
      'ext' => false,
      'name' => 'json',
      'path' => 'json/json-min.js',
      'requires' => 
      array (
      ),
      'rollup' => 1,
      'submodules' => 
      array (
        'json-parse' => 
        array (
          'expanded' => 
          array (
          ),
          'ext' => false,
          'name' => 'json-parse',
          'path' => 'json/json-parse-min.js',
          'requires' => 
          array (
          ),
          'type' => 'js',
        ),
        'json-stringify' => 
        array (
          'expanded' => 
          array (
          ),
          'ext' => false,
          'name' => 'json-stringify',
          'path' => 'json/json-stringify-min.js',
          'requires' => 
          array (
          ),
          'type' => 'js',
        ),
      ),
      'supersedes' => 
      array (
        0 => 'json-parse',
        1 => 'json-stringify',
      ),
      'type' => 'js',
    ),
    'json-parse' => 
    array (
      'expanded' => 
      array (
      ),
      'ext' => false,
      'name' => 'json-parse',
      'path' => 'json/json-parse-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
    'json-stringify' => 
    array (
      'expanded' => 
      array (
      ),
      'ext' => false,
      'name' => 'json-stringify',
      'path' => 'json/json-stringify-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
    'loader' => 
    array (
      'ext' => false,
      'name' => 'loader',
      'path' => 'loader/loader-min.js',
      'requires' => 
      array (
        0 => 'get',
      ),
      'type' => 'js',
    ),
    'node' => 
    array (
      'ext' => false,
      'name' => 'node',
      'path' => 'node/node-min.js',
      'requires' => 
      array (
        0 => 'dom',
      ),
      'rollup' => 3,
      'submodules' => 
      array (
        'node-base' => 
        array (
          'ext' => false,
          'name' => 'node-base',
          'path' => 'node/node-base-min.js',
          'requires' => 
          array (
            0 => 'dom-base',
            1 => 'selector',
          ),
          'type' => 'js',
        ),
        'node-event-simulate' => 
        array (
          'ext' => false,
          'name' => 'node-event-simulate',
          'path' => 'node/node-event-simulate-min.js',
          'requires' => 
          array (
            0 => 'node-base',
          ),
          'type' => 'js',
        ),
        'node-screen' => 
        array (
          'ext' => false,
          'name' => 'node-screen',
          'path' => 'node/node-screen-min.js',
          'requires' => 
          array (
            0 => 'dom-screen',
            1 => 'node-base',
          ),
          'type' => 'js',
        ),
        'node-style' => 
        array (
          'ext' => false,
          'name' => 'node-style',
          'path' => 'node/node-style-min.js',
          'requires' => 
          array (
            0 => 'dom-style',
            1 => 'node-base',
          ),
          'type' => 'js',
        ),
      ),
      'supersedes' => 
      array (
        0 => 'node-event-simulate',
        1 => 'node-screen',
        2 => 'node-style',
        3 => 'node-base',
      ),
      'type' => 'js',
    ),
    'node-base' => 
    array (
      'ext' => false,
      'name' => 'node-base',
      'path' => 'node/node-base-min.js',
      'requires' => 
      array (
        0 => 'dom-base',
        1 => 'selector',
      ),
      'type' => 'js',
    ),
    'node-event-simulate' => 
    array (
      'ext' => false,
      'name' => 'node-event-simulate',
      'path' => 'node/node-event-simulate-min.js',
      'requires' => 
      array (
        0 => 'node-base',
      ),
      'type' => 'js',
    ),
    'node-menunav' => 
    array (
      'ext' => false,
      'name' => 'node-menunav',
      'path' => 'node-menunav/node-menunav-min.js',
      'requires' => 
      array (
        0 => 'node',
        1 => 'classnamemanager',
        2 => 'skin-sam-node-menunav',
      ),
      'skinnable' => true,
      'type' => 'js',
    ),
    'node-screen' => 
    array (
      'ext' => false,
      'name' => 'node-screen',
      'path' => 'node/node-screen-min.js',
      'requires' => 
      array (
        0 => 'dom-screen',
        1 => 'node-base',
      ),
      'type' => 'js',
    ),
    'node-style' => 
    array (
      'ext' => false,
      'name' => 'node-style',
      'path' => 'node/node-style-min.js',
      'requires' => 
      array (
        0 => 'dom-style',
        1 => 'node-base',
      ),
      'type' => 'js',
    ),
    'oop' => 
    array (
      'ext' => false,
      'name' => 'oop',
      'path' => 'oop/oop-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
    ),
    'overlay' => 
    array (
      'ext' => false,
      'name' => 'overlay',
      'path' => 'overlay/overlay-min.js',
      'requires' => 
      array (
        0 => 'widget',
        1 => 'widget-position',
        2 => 'widget-position-ext',
        3 => 'widget-stack',
        4 => 'widget-stdmod',
        5 => 'skin-sam-overlay',
      ),
      'skinnable' => true,
      'type' => 'js',
    ),
    'plugin' => 
    array (
      'ext' => false,
      'name' => 'plugin',
      'path' => 'plugin/plugin-min.js',
      'requires' => 
      array (
        0 => 'base',
      ),
      'type' => 'js',
    ),
    'profiler' => 
    array (
      'ext' => false,
      'name' => 'profiler',
      'path' => 'profiler/profiler-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
    'queue' => 
    array (
      'ext' => false,
      'name' => 'queue',
      'path' => 'queue/queue-min.js',
      'requires' => 
      array (
        0 => 'node',
      ),
      'type' => 'js',
    ),
    'selector' => 
    array (
      'ext' => false,
      'name' => 'selector',
      'path' => 'dom/selector-min.js',
      'requires' => 
      array (
        0 => 'dom-base',
      ),
      'type' => 'js',
    ),
    'skin-sam-widget-position' => 
    array (
      'after' => 
      array (
        0 => 'reset',
        1 => 'fonts',
        2 => 'grids',
        3 => 'base',
      ),
      'ext' => false,
      'name' => 'skin-sam-widget-position',
      'path' => 'widget/assets/skins/sam/widget-position.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'skin-sam-widget-position-ext' => 
    array (
      'after' => 
      array (
        0 => 'reset',
        1 => 'fonts',
        2 => 'grids',
        3 => 'base',
      ),
      'ext' => false,
      'name' => 'skin-sam-widget-position-ext',
      'path' => 'widget/assets/skins/sam/widget-position-ext.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'skin-sam-widget-stack' => 
    array (
      'after' => 
      array (
        0 => 'reset',
        1 => 'fonts',
        2 => 'grids',
        3 => 'base',
      ),
      'ext' => false,
      'name' => 'skin-sam-widget-stack',
      'path' => 'widget/assets/skins/sam/widget-stack.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'skin-sam-widget-stdmod' => 
    array (
      'after' => 
      array (
        0 => 'reset',
        1 => 'fonts',
        2 => 'grids',
        3 => 'base',
      ),
      'ext' => false,
      'name' => 'skin-sam-widget-stdmod',
      'path' => 'widget/assets/skins/sam/widget-stdmod.css',
      'requires' => 
      array (
      ),
      'type' => 'css',
    ),
    'slider' => 
    array (
      'ext' => false,
      'name' => 'slider',
      'path' => 'slider/slider-min.js',
      'requires' => 
      array (
        0 => 'widget',
        1 => 'dd-constrain',
        2 => 'skin-sam-slider',
      ),
      'skinnable' => true,
      'type' => 'js',
    ),
    'stylesheet' => 
    array (
      'ext' => false,
      'name' => 'stylesheet',
      'path' => 'stylesheet/stylesheet-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
    'substitute' => 
    array (
      'ext' => false,
      'name' => 'substitute',
      'optional' => 
      array (
        0 => 'dump',
      ),
      'path' => 'substitute/substitute-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
    'test' => 
    array (
      'ext' => false,
      'name' => 'test',
      'path' => 'test/test-min.js',
      'requires' => 
      array (
        0 => 'substitute',
        1 => 'node',
        2 => 'json',
      ),
      'type' => 'js',
    ),
    'widget' => 
    array (
      'ext' => false,
      'name' => 'widget',
      'path' => 'widget/widget-min.js',
      'plugins' => 
      array (
        'widget-position' => 
        array (
          'ext' => false,
          'name' => 'widget-position',
          'path' => 'widget/widget-position-min.js',
          'requires' => 
          array (
            0 => 'widget',
            1 => 'widget',
          ),
          'type' => 'js',
        ),
        'widget-position-ext' => 
        array (
          'ext' => false,
          'name' => 'widget-position-ext',
          'path' => 'widget/widget-position-ext-min.js',
          'requires' => 
          array (
            0 => 'widget-position',
            1 => 'widget',
            2 => 'widget',
          ),
          'type' => 'js',
        ),
        'widget-stack' => 
        array (
          'ext' => false,
          'name' => 'widget-stack',
          'path' => 'widget/widget-stack-min.js',
          'requires' => 
          array (
            0 => 'widget',
            1 => 'skin-sam-widget-stack',
            2 => 'widget',
          ),
          'skinnable' => true,
          'type' => 'js',
        ),
        'widget-stdmod' => 
        array (
          'ext' => false,
          'name' => 'widget-stdmod',
          'path' => 'widget/widget-stdmod-min.js',
          'requires' => 
          array (
            0 => 'widget',
            1 => 'widget',
          ),
          'type' => 'js',
        ),
      ),
      'requires' => 
      array (
        0 => 'base',
        1 => 'node',
        2 => 'classnamemanager',
        3 => 'skin-sam-widget',
      ),
      'skinnable' => true,
      'type' => 'js',
    ),
    'widget-position' => 
    array (
      'ext' => false,
      'name' => 'widget-position',
      'path' => 'widget/widget-position-min.js',
      'requires' => 
      array (
        0 => 'widget',
        1 => 'widget',
      ),
      'type' => 'js',
    ),
    'widget-position-ext' => 
    array (
      'ext' => false,
      'name' => 'widget-position-ext',
      'path' => 'widget/widget-position-ext-min.js',
      'requires' => 
      array (
        0 => 'widget-position',
        1 => 'widget',
        2 => 'widget',
      ),
      'type' => 'js',
    ),
    'widget-stack' => 
    array (
      'ext' => false,
      'name' => 'widget-stack',
      'path' => 'widget/widget-stack-min.js',
      'requires' => 
      array (
        0 => 'widget',
        1 => 'skin-sam-widget-stack',
        2 => 'widget',
      ),
      'skinnable' => true,
      'type' => 'js',
    ),
    'widget-stdmod' => 
    array (
      'ext' => false,
      'name' => 'widget-stdmod',
      'path' => 'widget/widget-stdmod-min.js',
      'requires' => 
      array (
        0 => 'widget',
        1 => 'widget',
      ),
      'type' => 'js',
    ),
    'yui' => 
    array (
      'ext' => false,
      'name' => 'yui',
      'path' => 'yui/yui-min.js',
      'requires' => 
      array (
      ),
      'supersedes' => 
      array (
        0 => 'yui-base',
        1 => 'get',
        2 => 'loader',
      ),
      'type' => 'js',
    ),
    'yui-base' => 
    array (
      'ext' => false,
      'name' => 'yui-base',
      'path' => 'yui-base/yui-base-min.js',
      'requires' => 
      array (
      ),
      'type' => 'js',
    ),
  ),
  'skin' => 
  array (
    'after' => 
    array (
      0 => 'reset',
      1 => 'fonts',
      2 => 'grids',
      3 => 'base',
    ),
    'base' => 'assets/skins/',
    'defaultSkin' => 'sam',
    'path' => 'skin.css',
  ),
); ?>