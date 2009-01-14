<?php $yui_current = array (
  'base' => 'http://yui.yahooapis.com/2.4.0/build/',
  'skin' => 
  array (
    'path' => 'skin.css',
    'rollup' => 3,
    'base' => 'assets/skins/',
    'defaultSkin' => 'sam',
  ),
  'moduleInfo' => 
  array (
    'event' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'yahoo',
      ),
      'path' => 'event/event-min.js',
    ),
    'animation' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
      ),
      'path' => 'animation/animation-min.js',
    ),
    'datatable' => 
    array (
      'path' => 'datatable/datatable-beta-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'element',
        1 => 'datasource',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'calendar',
        1 => 'dragdrop',
      ),
    ),
    'menu' => 
    array (
      'path' => 'menu/menu-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'containercore',
      ),
      'type' => 'js',
    ),
    'treeview' => 
    array (
      'path' => 'treeview/treeview-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'event',
      ),
      'type' => 'js',
    ),
    'get' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'yahoo',
      ),
      'path' => 'get/get-beta-min.js',
    ),
    'simpleeditor' => 
    array (
      'path' => 'editor/simpleeditor-beta-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'element',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'containercore',
        1 => 'menu',
        2 => 'button',
        3 => 'animation',
        4 => 'dragdrop',
      ),
      'pkg' => 'editor',
    ),
    'datasource' => 
    array (
      'path' => 'datasource/datasource-beta-min.js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'connection',
      ),
    ),
    'fonts' => 
    array (
      'type' => 'css',
      'path' => 'fonts/fonts-min.css',
    ),
    'connection' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'path' => 'connection/connection-min.js',
    ),
    'json' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'yahoo',
      ),
      'path' => 'json/json-beta-min.js',
    ),
    'calendar' => 
    array (
      'path' => 'calendar/calendar-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'event',
        1 => 'dom',
      ),
      'type' => 'js',
    ),
    'reset' => 
    array (
      'type' => 'css',
      'path' => 'reset/reset-min.css',
    ),
    'container' => 
    array (
      'supersedes' => 
      array (
        0 => 'containercore',
      ),
      'path' => 'container/container-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'dragdrop',
        1 => 'animation',
        2 => 'connection',
      ),
    ),
    'grids' => 
    array (
      'path' => 'grids/grids-min.css',
      'requires' => 
      array (
        0 => 'fonts',
      ),
      'type' => 'css',
      'optional' => 
      array (
        0 => 'reset',
      ),
    ),
    'tabview' => 
    array (
      'path' => 'tabview/tabview-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'element',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'connection',
      ),
    ),
    'imageloader' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'event',
        1 => 'dom',
      ),
      'path' => 'imageloader/imageloader-beta-min.js',
    ),
    'containercore' => 
    array (
      'path' => 'container/container_core-min.js',
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
      ),
      'type' => 'js',
      'pkg' => 'container',
    ),
    'logger' => 
    array (
      'path' => 'logger/logger-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'event',
        1 => 'dom',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'dragdrop',
      ),
    ),
    'utilities' => 
    array (
      'supersedes' => 
      array (
        0 => 'yahoo',
        1 => 'event',
        2 => 'dragdrop',
        3 => 'animation',
        4 => 'dom',
        5 => 'connection',
        6 => 'element',
        7 => 'yahoo-dom-event',
      ),
      'path' => 'utilities/utilities.js',
      'rollup' => 6,
      'type' => 'js',
    ),
    'dragdrop' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
      ),
      'path' => 'dragdrop/dragdrop-min.js',
    ),
    'colorpicker' => 
    array (
      'path' => 'colorpicker/colorpicker-beta-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'slider',
        1 => 'element',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'animation',
      ),
    ),
    'base' => 
    array (
      'type' => 'css',
      'path' => 'base/base-min.css',
    ),
    'yuiloader' => 
    array (
      'type' => 'js',
      'path' => 'yuiloader/yuiloader-beta-min.js',
    ),
    'button' => 
    array (
      'path' => 'button/button-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'element',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'menu',
      ),
    ),
    'element' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
      ),
      'path' => 'element/element-beta-min.js',
    ),
    'yahoo' => 
    array (
      'type' => 'js',
      'path' => 'yahoo/yahoo-min.js',
    ),
    'history' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'path' => 'history/history-min.js',
    ),
    'charts' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'element',
        1 => 'json',
        2 => 'datasource',
      ),
      'path' => 'charts/charts-experimental-min.js',
    ),
    'slider' => 
    array (
      'path' => 'slider/slider-min.js',
      'requires' => 
      array (
        0 => 'dragdrop',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'animation',
      ),
    ),
    'selector' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'yahoo',
        1 => 'dom',
      ),
      'path' => 'selector/selector-beta-min.js',
    ),
    'yuitest' => 
    array (
      'path' => 'yuitest/yuitest-beta-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'logger',
      ),
      'type' => 'js',
    ),
    'reset-fonts-grids' => 
    array (
      'type' => 'css',
      'supersedes' => 
      array (
        0 => 'reset',
        1 => 'fonts',
        2 => 'grids',
      ),
      'path' => 'reset-fonts-grids/reset-fonts-grids.css',
    ),
    'autocomplete' => 
    array (
      'path' => 'autocomplete/autocomplete-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'connection',
        1 => 'animation',
      ),
    ),
    'yahoo-dom-event' => 
    array (
      'supersedes' => 
      array (
        0 => 'yahoo',
        1 => 'event',
        2 => 'dom',
      ),
      'path' => 'yahoo-dom-event/yahoo-dom-event.js',
      'rollup' => 3,
      'type' => 'js',
    ),
    'dom' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'yahoo',
      ),
      'path' => 'dom/dom-min.js',
    ),
    'reset-fonts' => 
    array (
      'type' => 'css',
      'supersedes' => 
      array (
        0 => 'reset',
        1 => 'fonts',
      ),
      'path' => 'reset-fonts/reset-fonts.css',
    ),
    'editor' => 
    array (
      'path' => 'editor/editor-beta-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'menu',
        1 => 'element',
        2 => 'button',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'animation',
        1 => 'dragdrop',
      ),
    ),
  ),
); ?>