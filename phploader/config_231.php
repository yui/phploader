<?php $yui_current = array (
  'base' => 'http://yui.yahooapis.com/2.3.1/build/',
  'skin' => 
  array (
    'path' => 'skin.css',
    'rollup' => 3,
    'base' => 'assets/skins/',
    'defaultSkin' => 'sam',
  ),
  'moduleInfo' => 
  array (
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
    'reset' => 
    array (
      'type' => 'css',
      'path' => 'reset/reset-min.css',
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
    'dom' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'yahoo',
      ),
      'path' => 'dom/dom-min.js',
    ),
    'event' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'yahoo',
      ),
      'path' => 'event/event-min.js',
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
    'containercore' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
      ),
      'path' => 'container/container_core-min.js',
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
      ),
    ),
    'history' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'path' => 'history/history-beta-min.js',
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
    'fonts' => 
    array (
      'type' => 'css',
      'path' => 'fonts/fonts-min.css',
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
    'imageloader' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'event',
        1 => 'dom',
      ),
      'path' => 'imageloader/imageloader-experimental-min.js',
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
    'yuiloader' => 
    array (
      'type' => 'js',
      'path' => 'yuiloader/yuiloader-beta-min.js',
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
    'button' => 
    array (
      'path' => 'button/button-beta-min.js',
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
    'yahoo' => 
    array (
      'type' => 'js',
      'path' => 'yahoo/yahoo-min.js',
    ),
  ),
); ?>