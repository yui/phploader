<?php $GLOBALS['yui_current'] = array (
  'base' => 'http://yui.yahooapis.com/2.6.0/build/',
  'skin' => 
  array (
    'after' => 
    array (
      0 => 'reset',
      1 => 'fonts',
      2 => 'grids',
      3 => 'base',
    ),
    'path' => 'skin.css',
    'base' => 'assets/skins/',
    'rollup' => 3,
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
      'path' => 'datatable/datatable-min.js',
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
        2 => 'paginator',
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
        1 => 'dom',
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
      'path' => 'get/get-min.js',
    ),
    'uploader' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'element',
      ),
      'path' => 'uploader/uploader-experimental.js',
    ),
    'datasource' => 
    array (
      'path' => 'datasource/datasource-min.js',
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

    // 'datastore' => 
    // array (
    //   'type' => 'js',
    //   'requires' => 
    //   array (
    //     0 => 'element',
    //   ),
    //   'path' => 'datastore/datastore-experimental-min.js',
    // ),

    'fonts' => 
    array (
      'type' => 'css',
      'path' => 'fonts/fonts-min.css',
    ),
    'profiler' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'yahoo',
      ),
      'path' => 'profiler/profiler-min.js',
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
      'path' => 'json/json-min.js',
    ),
    'carousel' => 
    array (
      'path' => 'carousel/carousel-beta-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'element',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'animation',
      )
    ),
    'simpleeditor' => 
    array (
      'path' => 'editor/simpleeditor-min.js',
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
    'yuiloader-dom-event' => 
    array (
      'supersedes' => 
      array (
        0 => 'yahoo',
        1 => 'dom',
        2 => 'event',
        3 => 'get',
        4 => 'yuiloader',
        5 => 'yahoo-dom-event',
      ),
      'path' => 'yuiloader-dom-event/yuiloader-dom-event.js',
      'rollup' => 4,
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
        2 => 'connection',
      ),
    ),
    'paginator' => 
    array (
      'path' => 'paginator/paginator-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'element',
      ),
      'type' => 'js',
    ),
    'profilerviewer' => 
    array (
      'path' => 'profilerviewer/profilerviewer-beta-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'profiler',
        1 => 'yuiloader',
        2 => 'element',
      ),
      'type' => 'js',
    ),
    'imagecropper' => 
    array (
      'path' => 'imagecropper/imagecropper-beta-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
        2 => 'dragdrop',
        3 => 'element',
        4 => 'resize',
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
    'layout' => 
    array (
      'path' => 'layout/layout-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
        2 => 'element',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'animation',
        1 => 'dragdrop',
        2 => 'resize',
        3 => 'selector',
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
      'path' => 'imageloader/imageloader-min.js',
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
    'cookie' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'yahoo',
      ),
      'path' => 'cookie/cookie-min.js',
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
        8 => 'get',
        9 => 'yuiloader',
        10 => 'yuiloader-dom-event',
      ),
      'path' => 'utilities/utilities.js',
      'rollup' => 8,
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
      'path' => 'colorpicker/colorpicker-min.js',
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
      'after' => 
      array (
        0 => 'reset',
        1 => 'fonts',
        2 => 'grids',
      ),
      'path' => 'base/base-min.css',
    ),
    'yuiloader' => 
    array (
      'type' => 'js',
      'supersedes' => 
      array (
        0 => 'yahoo',
        1 => 'get',
      ),
      'path' => 'yuiloader/yuiloader-min.js',
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
    'resize' => 
    array (
      'path' => 'resize/resize-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
        2 => 'dragdrop',
        3 => 'element',
      ),
      'type' => 'js',
      'optional' => 
      array (
        0 => 'animation',
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
    'history' => 
    array (
      'type' => 'js',
      'requires' => 
      array (
        0 => 'event',
      ),
      'path' => 'history/history-min.js',
    ),
    'yahoo' => 
    array (
      'type' => 'js',
      'path' => 'yahoo/yahoo-min.js',
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
      'skinnable' => true,
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
    'reset-fonts-grids' => 
    array (
      'supersedes' => 
      array (
        0 => 'reset',
        1 => 'fonts',
        2 => 'grids',
        3 => 'reset-fonts',
      ),
      'path' => 'reset-fonts-grids/reset-fonts-grids.css',
      'rollup' => 3,
      'type' => 'css',
    ),
    'yuitest' => 
    array (
      'path' => 'yuitest/yuitest-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'logger',
      ),
      'type' => 'js',
    ),
    'autocomplete' => 
    array (
      'path' => 'autocomplete/autocomplete-min.js',
      'skinnable' => true,
      'requires' => 
      array (
        0 => 'dom',
        1 => 'event',
        2 => 'datasource',
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
      'supersedes' => 
      array (
        0 => 'reset',
        1 => 'fonts',
      ),
      'path' => 'reset-fonts/reset-fonts.css',
      'rollup' => 2,
      'type' => 'css',
    ),
    'editor' => 
    array (
      'path' => 'editor/editor-min.js',
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
