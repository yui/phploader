<?php $GLOBALS['yui_current'] = array (
  'base' => 'http://yui.yahooapis.com/3.0.0b1/build/',
  'skin' => 
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
    'path' => 'skin.css',
    'base' => 'assets/skins/',
    'defaultSkin' => 'sam',
  ),
  'moduleInfo' => 
  array (
    'cssfonts-context' => 
    array (
      'path' => 'cssfonts/fonts-context-min.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'cssfonts-context',
      'requires' => 
      array (
      ),
    ),
    'dd-ddm' => 
    array (
      'path' => 'dd/dd-ddm-min.js',
      'requires' => 
      array (
        0 => 'dd-ddm-base',
      ),
      'type' => 'js',
      'name' => 'dd-ddm',
      'ext' => false,
    ),
    'stylesheet' => 
    array (
      'path' => 'stylesheet/stylesheet-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'stylesheet',
      'ext' => false,
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
      'path' => 'cssbase/base-min.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'cssbase',
      'requires' => 
      array (
      ),
    ),
    'anim-base' => 
    array (
      'path' => 'anim/anim-base-min.js',
      'requires' => 
      array (
        0 => 'base',
        1 => 'node-style',
      ),
      'type' => 'js',
      'name' => 'anim-base',
      'ext' => false,
    ),
    'oop' => 
    array (
      'path' => 'oop/oop-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'oop',
      'ext' => false,
    ),
    'selector-css3' => 
    array (
      'path' => 'dom/selector-css3-min.js',
      'requires' => 
      array (
        0 => 'selector',
        1 => 'dom',
        2 => 'dom',
      ),
      'type' => 'js',
      'name' => 'selector-css3',
      'ext' => false,
    ),
    'yui-base' => 
    array (
      '_provides' => 
      array (
        'yui-base' => true,
      ),
      'path' => 'yui-base/yui-base-min.js',
      '_supersedes' => 
      array (
      ),
      'type' => 'js',
      'ext' => false,
      'name' => 'yui-base',
      'requires' => 
      array (
      ),
      'expanded' => 
      array (
      ),
    ),
    'json-parse' => 
    array (
      '_provides' => 
      array (
        'json-parse' => true,
      ),
      'path' => 'json/json-parse-min.js',
      '_supersedes' => 
      array (
      ),
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'json-parse',
      'ext' => false,
      'expanded' => 
      array (
        0 => 'yui-base',
      ),
    ),
    'skin-sam-widget-stack' => 
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
      'path' => 'widget/assets/skins/sam/widget-stack.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'skin-sam-widget-stack',
      'requires' => 
      array (
      ),
    ),
    'dom-screen' => 
    array (
      'path' => 'dom/dom-screen-min.js',
      'requires' => 
      array (
        0 => 'dom-base',
        1 => 'dom-style',
      ),
      'type' => 'js',
      'name' => 'dom-screen',
      'ext' => false,
    ),
    'selector' => 
    array (
      'path' => 'dom/selector-min.js',
      'requires' => 
      array (
        0 => 'dom-base',
      ),
      'type' => 'js',
      'name' => 'selector',
      'ext' => false,
    ),
    'anim-node-plugin' => 
    array (
      'path' => 'anim/anim-node-plugin-min.js',
      'requires' => 
      array (
        0 => 'node',
        1 => 'anim-base',
      ),
      'type' => 'js',
      'name' => 'anim-node-plugin',
      'ext' => false,
    ),
    'dd-plugin' => 
    array (
      'path' => 'dd/dd-plugin-min.js',
      'requires' => 
      array (
        0 => 'dd-drag',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'dd-constrain',
        1 => 'dd-proxy',
      ),
      'name' => 'dd-plugin',
      'ext' => false,
    ),
    'skin-sam-widget-position-ext' => 
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
      'path' => 'widget/assets/skins/sam/widget-position-ext.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'skin-sam-widget-position-ext',
      'requires' => 
      array (
      ),
    ),
    'classnamemanager' => 
    array (
      'path' => 'classnamemanager/classnamemanager-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'classnamemanager',
      'ext' => false,
    ),
    'skin-sam-widget-stdmod' => 
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
      'path' => 'widget/assets/skins/sam/widget-stdmod.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'skin-sam-widget-stdmod',
      'requires' => 
      array (
      ),
    ),
    'overlay' => 
    array (
      'path' => 'overlay/overlay-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'widget',
        1 => 'widget-position',
        2 => 'widget-position-ext',
        3 => 'widget-stack',
        4 => 'widget-stdmod',
        5 => 'skin-sam-overlay',
        6 => 'skin-sam-overlay',
      ),
      'type' => 'js',
      'name' => 'overlay',
      'ext' => false,
    ),
    'get' => 
    array (
      '_provides' => 
      array (
        'get' => true,
      ),
      'path' => 'get/get-min.js',
      '_supersedes' => 
      array (
      ),
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'get',
      'ext' => false,
    ),
    'dom-style' => 
    array (
      'path' => 'dom/dom-style-min.js',
      'requires' => 
      array (
        0 => 'dom-base',
      ),
      'type' => 'js',
      'name' => 'dom-style',
      'ext' => false,
    ),
    'skin-sam-overlay' => 
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
      'path' => 'overlay/assets/skins/sam/overlay.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'skin-sam-overlay',
      'requires' => 
      array (
      ),
    ),
    'widget-position-ext' => 
    array (
      'path' => 'widget/widget-position-ext-min.js',
      'requires' => 
      array (
        0 => 'widget-position',
        1 => 'widget',
        2 => 'widget',
      ),
      'type' => 'js',
      'name' => 'widget-position-ext',
      'ext' => false,
    ),
    'dd-drop' => 
    array (
      'path' => 'dd/dd-drop-min.js',
      'requires' => 
      array (
        0 => 'dd-ddm-drop',
      ),
      'type' => 'js',
      'name' => 'dd-drop',
      'ext' => false,
    ),
    'io-upload-iframe' => 
    array (
      'path' => 'io/io-upload-iframe-min.js',
      'requires' => 
      array (
        0 => 'io-base',
        1 => 'node',
      ),
      'type' => 'js',
      'name' => 'io-upload-iframe',
      'ext' => false,
    ),
    'collection' => 
    array (
      'path' => 'collection/collection-min.js',
      'requires' => 
      array (
        0 => 'oop',
      ),
      'type' => 'js',
      'name' => 'collection',
      'ext' => false,
    ),
    'dd-drop-plugin' => 
    array (
      'path' => 'dd/dd-drop-plugin-min.js',
      'requires' => 
      array (
        0 => 'dd-drop',
      ),
      'type' => 'js',
      'name' => 'dd-drop-plugin',
      'ext' => false,
    ),
    'dom-base' => 
    array (
      'path' => 'dom/dom-base-min.js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'type' => 'js',
      'name' => 'dom-base',
      'ext' => false,
    ),
    'skin-sam-node-menunav' => 
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
      'path' => 'node-menunav/assets/skins/sam/node-menunav.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'skin-sam-node-menunav',
      'requires' => 
      array (
      ),
    ),
    'anim-color' => 
    array (
      'path' => 'anim/anim-color-min.js',
      'requires' => 
      array (
        0 => 'anim-base',
      ),
      'type' => 'js',
      'name' => 'anim-color',
      'ext' => false,
    ),
    'dump' => 
    array (
      'path' => 'dump/dump-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'dump',
      'ext' => false,
    ),
    'yui' => 
    array (
      'supersedes' => 
      array (
        0 => 'yui-base',
        1 => 'get',
        2 => 'loader',
      ),
      '_provides' => 
      array (
        'yui-base' => true,
        'yui' => true,
        'get' => true,
        'loader' => true,
      ),
      'path' => 'yui/yui-min.js',
      '_supersedes' => 
      array (
        'get' => true,
        'yui-base' => true,
        'loader' => true,
      ),
      'type' => 'js',
      'ext' => false,
      'name' => 'yui',
      'requires' => 
      array (
      ),
    ),
    'cssgrids-context' => 
    array (
      'path' => 'cssgrids/grids-context-min.css',
      'requires' => 
      array (
        0 => 'cssfonts-context',
      ),
      'type' => 'css',
      'optional' => 
      array (
        0 => 'cssreset-context',
      ),
      'name' => 'cssgrids-context',
      'ext' => false,
    ),
    'node' => 
    array (
      'requires' => 
      array (
        0 => 'dom',
        1 => 'base',
      ),
      'path' => 'node/node-min.js',
      'supersedes' => 
      array (
        0 => 'node-screen',
        1 => 'node-base',
        2 => 'node-style',
      ),
      'submodules' => 
      array (
        'node-screen' => 
        array (
          'path' => 'node/node-screen-min.js',
          'requires' => 
          array (
            0 => 'dom-screen',
            1 => 'node-base',
          ),
          'type' => 'js',
          'name' => 'node-screen',
          'ext' => false,
        ),
        'node-base' => 
        array (
          'path' => 'node/node-base-min.js',
          'requires' => 
          array (
            0 => 'dom-base',
            1 => 'base',
            2 => 'selector',
          ),
          'type' => 'js',
          'name' => 'node-base',
          'ext' => false,
        ),
        'node-style' => 
        array (
          'path' => 'node/node-style-min.js',
          'requires' => 
          array (
            0 => 'dom-style',
            1 => 'node-base',
          ),
          'type' => 'js',
          'name' => 'node-style',
          'ext' => false,
        ),
      ),
      'type' => 'js',
      'plugins' => 
      array (
        'node-event-simulate' => 
        array (
          'path' => 'node/node-event-simulate-min.js',
          'requires' => 
          array (
            0 => 'node-base',
            1 => 'event-simulate',
            2 => 'node',
            3 => 'node',
          ),
          'type' => 'js',
          'name' => 'node-event-simulate',
          'ext' => false,
        ),
      ),
      'ext' => false,
      'name' => 'node',
      'rollup' => 2,
    ),
    'skin-sam-slider' => 
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
      'path' => 'slider/assets/skins/sam/slider.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'skin-sam-slider',
      'requires' => 
      array (
      ),
    ),
    'test' => 
    array (
      'path' => 'test/test-min.js',
      'requires' => 
      array (
        0 => 'collection',
        1 => 'substitute',
        2 => 'node',
        3 => 'json',
      ),
      'type' => 'js',
      'name' => 'test',
      'ext' => false,
    ),
    'anim-curve' => 
    array (
      'path' => 'anim/anim-curve-min.js',
      'requires' => 
      array (
        0 => 'anim-xy',
      ),
      'type' => 'js',
      'name' => 'anim-curve',
      'ext' => false,
    ),
    'skin-sam-widget' => 
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
      'path' => 'widget/assets/skins/sam/widget.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'skin-sam-widget',
      'requires' => 
      array (
      ),
    ),
    'json' => 
    array (
      'requires' => 
      array (
      ),
      'path' => 'json/json-min.js',
      'supersedes' => 
      array (
        0 => 'json-parse',
        1 => 'json-stringify',
      ),
      '_supersedes' => 
      array (
        'json-parse' => true,
        'json-stringify' => true,
      ),
      '_provides' => 
      array (
        'json-parse' => true,
        'json' => true,
        'json-stringify' => true,
      ),
      'submodules' => 
      array (
        'json-parse' => 
        array (
          '_provides' => 
          array (
            'json-parse' => true,
          ),
          'path' => 'json/json-parse-min.js',
          '_supersedes' => 
          array (
          ),
          'requires' => 
          array (
            0 => 'yui-base',
          ),
          'type' => 'js',
          'name' => 'json-parse',
          'ext' => false,
          'expanded' => 
          array (
            0 => 'yui-base',
          ),
        ),
        'json-stringify' => 
        array (
          '_provides' => 
          array (
            'json-stringify' => true,
          ),
          'path' => 'json/json-stringify-min.js',
          '_supersedes' => 
          array (
          ),
          'requires' => 
          array (
            0 => 'yui-base',
          ),
          'type' => 'js',
          'name' => 'json-stringify',
          'ext' => false,
          'expanded' => 
          array (
            0 => 'yui-base',
          ),
        ),
      ),
      'type' => 'js',
      'expanded' => 
      array (
        0 => 'json-parse',
        1 => 'yui-base',
        2 => 'json-stringify',
      ),
      'ext' => false,
      'name' => 'json',
      'rollup' => 1,
    ),
    'history' => 
    array (
      'path' => 'history/history-min.js',
      'requires' => 
      array (
        0 => 'node',
      ),
      'type' => 'js',
      'name' => 'history',
      'ext' => false,
    ),
    'queue-base' => 
    array (
      'path' => 'queue/queue-base-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'queue-base',
      'ext' => false,
    ),
    'compat' => 
    array (
      'path' => 'compat/compat-min.js',
      'requires' => 
      array (
        0 => 'node',
        1 => 'dump',
        2 => 'substitute',
      ),
      'type' => 'js',
      'name' => 'compat',
      'ext' => false,
    ),
    'cookie' => 
    array (
      'path' => 'cookie/cookie-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'cookie',
      'ext' => false,
    ),
    'anim' => 
    array (
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
      'path' => 'anim/anim-min.js',
      'rollup' => 4,
      'requires' => 
      array (
        0 => 'base',
        1 => 'node',
      ),
      'type' => 'js',
      'submodules' => 
      array (
        'anim-color' => 
        array (
          'path' => 'anim/anim-color-min.js',
          'requires' => 
          array (
            0 => 'anim-base',
          ),
          'type' => 'js',
          'name' => 'anim-color',
          'ext' => false,
        ),
        'anim-scroll' => 
        array (
          'path' => 'anim/anim-scroll-min.js',
          'requires' => 
          array (
            0 => 'anim-base',
          ),
          'type' => 'js',
          'name' => 'anim-scroll',
          'ext' => false,
        ),
        'anim-node-plugin' => 
        array (
          'path' => 'anim/anim-node-plugin-min.js',
          'requires' => 
          array (
            0 => 'node',
            1 => 'anim-base',
          ),
          'type' => 'js',
          'name' => 'anim-node-plugin',
          'ext' => false,
        ),
        'anim-base' => 
        array (
          'path' => 'anim/anim-base-min.js',
          'requires' => 
          array (
            0 => 'base',
            1 => 'node-style',
          ),
          'type' => 'js',
          'name' => 'anim-base',
          'ext' => false,
        ),
        'anim-curve' => 
        array (
          'path' => 'anim/anim-curve-min.js',
          'requires' => 
          array (
            0 => 'anim-xy',
          ),
          'type' => 'js',
          'name' => 'anim-curve',
          'ext' => false,
        ),
        'anim-easing' => 
        array (
          'path' => 'anim/anim-easing-min.js',
          'requires' => 
          array (
            0 => 'yui-base',
          ),
          'type' => 'js',
          'name' => 'anim-easing',
          'ext' => false,
        ),
        'anim-xy' => 
        array (
          'path' => 'anim/anim-xy-min.js',
          'requires' => 
          array (
            0 => 'anim-base',
            1 => 'node-screen',
          ),
          'type' => 'js',
          'name' => 'anim-xy',
          'ext' => false,
        ),
      ),
      'name' => 'anim',
      'ext' => false,
    ),
    'io-base' => 
    array (
      'path' => 'io/io-base-min.js',
      'requires' => 
      array (
        0 => 'event-custom',
      ),
      'type' => 'js',
      'name' => 'io-base',
      'ext' => false,
    ),
    'widget-stdmod' => 
    array (
      'path' => 'widget/widget-stdmod-min.js',
      'requires' => 
      array (
        0 => 'widget',
        1 => 'widget',
      ),
      'type' => 'js',
      'name' => 'widget-stdmod',
      'ext' => false,
    ),
    'event' => 
    array (
      'path' => 'event/event-min.js',
      'requires' => 
      array (
        0 => 'event-custom',
      ),
      'type' => 'js',
      'name' => 'event',
      'ext' => false,
    ),
    'cssfonts' => 
    array (
      'path' => 'cssfonts/fonts-min.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'cssfonts',
      'requires' => 
      array (
      ),
    ),
    'skin-sam-console' => 
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
      'path' => 'console/assets/skins/sam/console.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'skin-sam-console',
      'requires' => 
      array (
      ),
    ),
    'anim-xy' => 
    array (
      'path' => 'anim/anim-xy-min.js',
      'requires' => 
      array (
        0 => 'anim-base',
        1 => 'node-screen',
      ),
      'type' => 'js',
      'name' => 'anim-xy',
      'ext' => false,
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
      'path' => 'cssbase/base-context-min.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'cssbase-context',
      'requires' => 
      array (
      ),
    ),
    'profiler' => 
    array (
      'path' => 'profiler/profiler-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'profiler',
      'ext' => false,
    ),
    'node-event-simulate' => 
    array (
      'path' => 'node/node-event-simulate-min.js',
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'event-simulate',
        2 => 'node',
        3 => 'node',
      ),
      'type' => 'js',
      'name' => 'node-event-simulate',
      'ext' => false,
    ),
    'io' => 
    array (
      'supersedes' => 
      array (
        0 => 'io-queue',
        1 => 'io-upload-iframe',
        2 => 'io-base',
        3 => 'io-form',
        4 => 'io-xdr',
      ),
      'path' => 'io/io-min.js',
      'rollup' => 4,
      'type' => 'js',
      'ext' => false,
      'submodules' => 
      array (
        'io-queue' => 
        array (
          'path' => 'io/io-queue-min.js',
          'requires' => 
          array (
            0 => 'io-base',
          ),
          'type' => 'js',
          'name' => 'io-queue',
          'ext' => false,
        ),
        'io-upload-iframe' => 
        array (
          'path' => 'io/io-upload-iframe-min.js',
          'requires' => 
          array (
            0 => 'io-base',
            1 => 'node',
          ),
          'type' => 'js',
          'name' => 'io-upload-iframe',
          'ext' => false,
        ),
        'io-base' => 
        array (
          'path' => 'io/io-base-min.js',
          'requires' => 
          array (
            0 => 'event-custom',
          ),
          'type' => 'js',
          'name' => 'io-base',
          'ext' => false,
        ),
        'io-form' => 
        array (
          'path' => 'io/io-form-min.js',
          'requires' => 
          array (
            0 => 'io-base',
            1 => 'node',
          ),
          'type' => 'js',
          'name' => 'io-form',
          'ext' => false,
        ),
        'io-xdr' => 
        array (
          'path' => 'io/io-xdr-min.js',
          'requires' => 
          array (
            0 => 'io-base',
          ),
          'type' => 'js',
          'name' => 'io-xdr',
          'ext' => false,
        ),
      ),
      'name' => 'io',
      'requires' => 
      array (
      ),
    ),
    'console' => 
    array (
      'path' => 'console/console-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'widget',
        1 => 'substitute',
        2 => 'skin-sam-console',
        3 => 'skin-sam-console',
      ),
      'type' => 'js',
      'name' => 'console',
      'ext' => false,
    ),
    'attribute' => 
    array (
      'path' => 'attribute/attribute-min.js',
      'requires' => 
      array (
        0 => 'event-custom',
      ),
      'type' => 'js',
      'name' => 'attribute',
      'ext' => false,
    ),
    'anim-easing' => 
    array (
      'path' => 'anim/anim-easing-min.js',
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'anim-easing',
      'ext' => false,
    ),
    'node-style' => 
    array (
      'path' => 'node/node-style-min.js',
      'requires' => 
      array (
        0 => 'dom-style',
        1 => 'node-base',
      ),
      'type' => 'js',
      'name' => 'node-style',
      'ext' => false,
    ),
    'focusmanager' => 
    array (
      'path' => 'focusmanager/focusmanager-min.js',
      'requires' => 
      array (
        0 => 'node',
      ),
      'type' => 'js',
      'name' => 'focusmanager',
      'ext' => false,
    ),
    'loader' => 
    array (
      '_provides' => 
      array (
        'loader' => true,
      ),
      'path' => 'loader/loader-min.js',
      '_supersedes' => 
      array (
      ),
      'requires' => 
      array (
        0 => 'get',
      ),
      'type' => 'js',
      'name' => 'loader',
      'ext' => false,
    ),
    'io-queue' => 
    array (
      'path' => 'io/io-queue-min.js',
      'requires' => 
      array (
        0 => 'io-base',
      ),
      'type' => 'js',
      'name' => 'io-queue',
      'ext' => false,
    ),
    'base' => 
    array (
      'path' => 'base/base-min.js',
      'requires' => 
      array (
        0 => 'attribute',
      ),
      'type' => 'js',
      'name' => 'base',
      'ext' => false,
    ),
    'plugin' => 
    array (
      'path' => 'plugin/plugin-min.js',
      'requires' => 
      array (
        0 => 'base',
      ),
      'type' => 'js',
      'name' => 'plugin',
      'ext' => false,
    ),
    'event-simulate' => 
    array (
      'path' => 'event-simulate/event-simulate-min.js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'type' => 'js',
      'name' => 'event-simulate',
      'ext' => false,
    ),
    'widget-position' => 
    array (
      'path' => 'widget/widget-position-min.js',
      'requires' => 
      array (
        0 => 'widget',
        1 => 'widget',
      ),
      'type' => 'js',
      'name' => 'widget-position',
      'ext' => false,
    ),
    'dom' => 
    array (
      'requires' => 
      array (
        0 => 'event',
      ),
      'path' => 'dom/dom-min.js',
      'supersedes' => 
      array (
        0 => 'selector-native',
        1 => 'dom-screen',
        2 => 'dom-base',
        3 => 'dom-style',
        4 => 'selector',
      ),
      'submodules' => 
      array (
        'selector-native' => 
        array (
          'path' => 'dom/selector-native-min.js',
          'requires' => 
          array (
            0 => 'dom-base',
          ),
          'type' => 'js',
          'name' => 'selector-native',
          'ext' => false,
        ),
        'dom-screen' => 
        array (
          'path' => 'dom/dom-screen-min.js',
          'requires' => 
          array (
            0 => 'dom-base',
            1 => 'dom-style',
          ),
          'type' => 'js',
          'name' => 'dom-screen',
          'ext' => false,
        ),
        'dom-base' => 
        array (
          'path' => 'dom/dom-base-min.js',
          'requires' => 
          array (
            0 => 'event',
          ),
          'type' => 'js',
          'name' => 'dom-base',
          'ext' => false,
        ),
        'dom-style' => 
        array (
          'path' => 'dom/dom-style-min.js',
          'requires' => 
          array (
            0 => 'dom-base',
          ),
          'type' => 'js',
          'name' => 'dom-style',
          'ext' => false,
        ),
        'selector' => 
        array (
          'path' => 'dom/selector-min.js',
          'requires' => 
          array (
            0 => 'dom-base',
          ),
          'type' => 'js',
          'name' => 'selector',
          'ext' => false,
        ),
      ),
      'type' => 'js',
      'plugins' => 
      array (
        'selector-css3' => 
        array (
          'path' => 'dom/selector-css3-min.js',
          'requires' => 
          array (
            0 => 'selector',
            1 => 'dom',
            2 => 'dom',
          ),
          'type' => 'js',
          'name' => 'selector-css3',
          'ext' => false,
        ),
      ),
      'ext' => false,
      'name' => 'dom',
      'rollup' => 4,
    ),
    'node-screen' => 
    array (
      'path' => 'node/node-screen-min.js',
      'requires' => 
      array (
        0 => 'dom-screen',
        1 => 'node-base',
      ),
      'type' => 'js',
      'name' => 'node-screen',
      'ext' => false,
    ),
    'io-form' => 
    array (
      'path' => 'io/io-form-min.js',
      'requires' => 
      array (
        0 => 'io-base',
        1 => 'node',
      ),
      'type' => 'js',
      'name' => 'io-form',
      'ext' => false,
    ),
    'dd' => 
    array (
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
      'path' => 'dd/dd-min.js',
      'rollup' => 4,
      'type' => 'js',
      'ext' => false,
      'submodules' => 
      array (
        'dd-drop-plugin' => 
        array (
          'path' => 'dd/dd-drop-plugin-min.js',
          'requires' => 
          array (
            0 => 'dd-drop',
          ),
          'type' => 'js',
          'name' => 'dd-drop-plugin',
          'ext' => false,
        ),
        'dd-constrain' => 
        array (
          'path' => 'dd/dd-constrain-min.js',
          'requires' => 
          array (
            0 => 'dd-drag',
            1 => 'dd-proxy',
          ),
          'type' => 'js',
          'name' => 'dd-constrain',
          'ext' => false,
        ),
        'dd-proxy' => 
        array (
          'path' => 'dd/dd-proxy-min.js',
          'requires' => 
          array (
            0 => 'dd-drag',
          ),
          'type' => 'js',
          'name' => 'dd-proxy',
          'ext' => false,
        ),
        'dd-ddm' => 
        array (
          'path' => 'dd/dd-ddm-min.js',
          'requires' => 
          array (
            0 => 'dd-ddm-base',
          ),
          'type' => 'js',
          'name' => 'dd-ddm',
          'ext' => false,
        ),
        'dd-ddm-drop' => 
        array (
          'path' => 'dd/dd-ddm-drop-min.js',
          'requires' => 
          array (
            0 => 'dd-ddm',
          ),
          'type' => 'js',
          'name' => 'dd-ddm-drop',
          'ext' => false,
        ),
        'dd-ddm-base' => 
        array (
          'path' => 'dd/dd-ddm-base-min.js',
          'requires' => 
          array (
            0 => 'node',
            1 => 'base',
          ),
          'type' => 'js',
          'name' => 'dd-ddm-base',
          'ext' => false,
        ),
        'dd-plugin' => 
        array (
          'path' => 'dd/dd-plugin-min.js',
          'requires' => 
          array (
            0 => 'dd-drag',
          ),
          'type' => 'js',
          'optional' => 
          array (
            0 => 'dd-constrain',
            1 => 'dd-proxy',
          ),
          'name' => 'dd-plugin',
          'ext' => false,
        ),
        'dd-drag' => 
        array (
          'path' => 'dd/dd-drag-min.js',
          'requires' => 
          array (
            0 => 'dd-ddm-base',
          ),
          'type' => 'js',
          'name' => 'dd-drag',
          'ext' => false,
        ),
        'dd-drop' => 
        array (
          'path' => 'dd/dd-drop-min.js',
          'requires' => 
          array (
            0 => 'dd-ddm-drop',
          ),
          'type' => 'js',
          'name' => 'dd-drop',
          'ext' => false,
        ),
      ),
      'name' => 'dd',
      'requires' => 
      array (
      ),
    ),
    'skin-sam-widget-position' => 
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
      'path' => 'widget/assets/skins/sam/widget-position.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'skin-sam-widget-position',
      'requires' => 
      array (
      ),
    ),
    'dd-ddm-drop' => 
    array (
      'path' => 'dd/dd-ddm-drop-min.js',
      'requires' => 
      array (
        0 => 'dd-ddm',
      ),
      'type' => 'js',
      'name' => 'dd-ddm-drop',
      'ext' => false,
    ),
    'slider' => 
    array (
      'path' => 'slider/slider-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'widget',
        1 => 'dd-constrain',
        2 => 'skin-sam-slider',
        3 => 'skin-sam-slider',
      ),
      'type' => 'js',
      'name' => 'slider',
      'ext' => false,
    ),
    'substitute' => 
    array (
      'path' => 'substitute/substitute-min.js',
      'type' => 'js',
      'ext' => false,
      'optional' => 
      array (
        0 => 'dump',
      ),
      'name' => 'substitute',
      'requires' => 
      array (
      ),
    ),
    'widget-stack' => 
    array (
      'path' => 'widget/widget-stack-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'widget',
        1 => 'skin-sam-widget-stack',
        2 => 'widget',
        3 => 'skin-sam-widget-stack',
      ),
      'type' => 'js',
      'name' => 'widget-stack',
      'ext' => false,
    ),
    'selector-native' => 
    array (
      'path' => 'dom/selector-native-min.js',
      'requires' => 
      array (
        0 => 'dom-base',
      ),
      'type' => 'js',
      'name' => 'selector-native',
      'ext' => false,
    ),
    'node-menunav' => 
    array (
      'path' => 'node-menunav/node-menunav-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'node',
        1 => 'classnamemanager',
        2 => 'skin-sam-node-menunav',
        3 => 'skin-sam-node-menunav',
      ),
      'type' => 'js',
      'name' => 'node-menunav',
      'ext' => false,
    ),
    'widget' => 
    array (
      'path' => 'widget/widget-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'base',
        1 => 'node',
        2 => 'classnamemanager',
        3 => 'skin-sam-widget',
        4 => 'skin-sam-widget',
      ),
      'type' => 'js',
      'name' => 'widget',
      'ext' => false,
      'plugins' => 
      array (
        'widget-stack' => 
        array (
          'path' => 'widget/widget-stack-min.js',
          'skinnable' => true,
          'requires' => 
          array (
            0 => 'widget',
            1 => 'skin-sam-widget-stack',
            2 => 'widget',
            3 => 'skin-sam-widget-stack',
          ),
          'type' => 'js',
          'name' => 'widget-stack',
          'ext' => false,
        ),
        'widget-position' => 
        array (
          'path' => 'widget/widget-position-min.js',
          'requires' => 
          array (
            0 => 'widget',
            1 => 'widget',
          ),
          'type' => 'js',
          'name' => 'widget-position',
          'ext' => false,
        ),
        'widget-stdmod' => 
        array (
          'path' => 'widget/widget-stdmod-min.js',
          'requires' => 
          array (
            0 => 'widget',
            1 => 'widget',
          ),
          'type' => 'js',
          'name' => 'widget-stdmod',
          'ext' => false,
        ),
        'widget-position-ext' => 
        array (
          'path' => 'widget/widget-position-ext-min.js',
          'requires' => 
          array (
            0 => 'widget-position',
            1 => 'widget',
            2 => 'widget',
          ),
          'type' => 'js',
          'name' => 'widget-position-ext',
          'ext' => false,
        ),
      ),
    ),
    'queue-io' => 
    array (
      'path' => 'queue/queue-io-min.js',
      'requires' => 
      array (
        0 => 'io-base',
        1 => 'queue',
        2 => 'queue',
      ),
      'type' => 'js',
      'name' => 'queue-io',
      'ext' => false,
    ),
    'cssreset' => 
    array (
      'path' => 'cssreset/reset-min.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'cssreset',
      'requires' => 
      array (
      ),
    ),
    'json-stringify' => 
    array (
      '_provides' => 
      array (
        'json-stringify' => true,
      ),
      'path' => 'json/json-stringify-min.js',
      '_supersedes' => 
      array (
      ),
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'type' => 'js',
      'name' => 'json-stringify',
      'ext' => false,
      'expanded' => 
      array (
        0 => 'yui-base',
      ),
    ),
    'anim-scroll' => 
    array (
      'path' => 'anim/anim-scroll-min.js',
      'requires' => 
      array (
        0 => 'anim-base',
      ),
      'type' => 'js',
      'name' => 'anim-scroll',
      'ext' => false,
    ),
    'dd-proxy' => 
    array (
      'path' => 'dd/dd-proxy-min.js',
      'requires' => 
      array (
        0 => 'dd-drag',
      ),
      'type' => 'js',
      'name' => 'dd-proxy',
      'ext' => false,
    ),
    'dd-ddm-base' => 
    array (
      'path' => 'dd/dd-ddm-base-min.js',
      'requires' => 
      array (
        0 => 'node',
        1 => 'base',
      ),
      'type' => 'js',
      'name' => 'dd-ddm-base',
      'ext' => false,
    ),
    'dd-constrain' => 
    array (
      'path' => 'dd/dd-constrain-min.js',
      'requires' => 
      array (
        0 => 'dd-drag',
        1 => 'dd-proxy',
      ),
      'type' => 'js',
      'name' => 'dd-constrain',
      'ext' => false,
    ),
    'cssreset-context' => 
    array (
      'path' => 'cssreset/reset-context-min.css',
      'type' => 'css',
      'ext' => false,
      'name' => 'cssreset-context',
      'requires' => 
      array (
      ),
    ),
    'node-base' => 
    array (
      'path' => 'node/node-base-min.js',
      'requires' => 
      array (
        0 => 'dom-base',
        1 => 'base',
        2 => 'selector',
      ),
      'type' => 'js',
      'name' => 'node-base',
      'ext' => false,
    ),
    'queue' => 
    array (
      'requires' => 
      array (
        0 => 'event-custom',
      ),
      'path' => 'queue/queue-min.js',
      'supersedes' => 
      array (
        0 => 'queue-base',
      ),
      'submodules' => 
      array (
        'queue-base' => 
        array (
          'path' => 'queue/queue-base-min.js',
          'requires' => 
          array (
            0 => 'yui-base',
          ),
          'type' => 'js',
          'name' => 'queue-base',
          'ext' => false,
        ),
      ),
      'type' => 'js',
      'plugins' => 
      array (
        'queue-io' => 
        array (
          'path' => 'queue/queue-io-min.js',
          'requires' => 
          array (
            0 => 'io-base',
            1 => 'queue',
            2 => 'queue',
          ),
          'type' => 'js',
          'name' => 'queue-io',
          'ext' => false,
        ),
      ),
      'ext' => false,
      'name' => 'queue',
      'rollup' => 0,
    ),
    'dd-drag' => 
    array (
      'path' => 'dd/dd-drag-min.js',
      'requires' => 
      array (
        0 => 'dd-ddm-base',
      ),
      'type' => 'js',
      'name' => 'dd-drag',
      'ext' => false,
    ),
    'cssgrids' => 
    array (
      'path' => 'cssgrids/grids-min.css',
      'requires' => 
      array (
        0 => 'cssfonts',
      ),
      'type' => 'css',
      'optional' => 
      array (
        0 => 'cssreset',
      ),
      'name' => 'cssgrids',
      'ext' => false,
    ),
    'io-xdr' => 
    array (
      'path' => 'io/io-xdr-min.js',
      'requires' => 
      array (
        0 => 'io-base',
      ),
      'type' => 'js',
      'name' => 'io-xdr',
      'ext' => false,
    ),
    'event-custom' => 
    array (
      'path' => 'event-custom/event-custom-min.js',
      'requires' => 
      array (
        0 => 'oop',
      ),
      'type' => 'js',
      'name' => 'event-custom',
      'ext' => false,
    ),
  ),
); ?>