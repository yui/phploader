<?php $GLOBALS['yui_current'] = array (
  'skin' => 
  array (
    'defaultSkin' => 'sam',
    'base' => 'assets/skins/',
    'path' => 'skin.css',
    'after' => 
    array (
      0 => 'cssreset',
      1 => 'cssfonts',
      2 => 'cssgrids',
      3 => 'cssbase',
      4 => 'cssreset-context',
      5 => 'cssfonts-context',
    ),
  ),
  'moduleInfo' => 
  array (
    'align-plugin' => 
    array (
      'requires' => 
      array (
        0 => 'node-screen',
        1 => 'node-pluginhost',
      ),
      'name' => 'align-plugin',
      'type' => 'js',
      'path' => 'align-plugin/align-plugin-min.js',
      'ext' => false,
    ),
    'anim' => 
    array (
      'use' => 
      array (
        0 => 'anim-base',
        1 => 'anim-color',
        2 => 'anim-curve',
        3 => 'anim-easing',
        4 => 'anim-node-plugin',
        5 => 'anim-scroll',
        6 => 'anim-xy',
      ),
      'name' => 'anim',
      'type' => 'js',
      'path' => 'anim/anim-min.js',
      'supersedes' => 
      array (
        0 => 'anim-base',
        1 => 'anim-color',
        2 => 'anim-curve',
        3 => 'anim-easing',
        4 => 'anim-node-plugin',
        5 => 'anim-scroll',
        6 => 'anim-xy',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'anim-base' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'node-style',
      ),
      'name' => 'anim-base',
      'type' => 'js',
      'path' => 'anim-base/anim-base-min.js',
      'ext' => false,
    ),
    'anim-color' => 
    array (
      'requires' => 
      array (
        0 => 'anim-base',
      ),
      'name' => 'anim-color',
      'type' => 'js',
      'path' => 'anim-color/anim-color-min.js',
      'ext' => false,
    ),
    'anim-curve' => 
    array (
      'requires' => 
      array (
        0 => 'anim-xy',
      ),
      'name' => 'anim-curve',
      'type' => 'js',
      'path' => 'anim-curve/anim-curve-min.js',
      'ext' => false,
    ),
    'anim-easing' => 
    array (
      'requires' => 
      array (
        0 => 'anim-base',
      ),
      'name' => 'anim-easing',
      'type' => 'js',
      'path' => 'anim-easing/anim-easing-min.js',
      'ext' => false,
    ),
    'anim-node-plugin' => 
    array (
      'requires' => 
      array (
        0 => 'node-pluginhost',
        1 => 'anim-base',
      ),
      'name' => 'anim-node-plugin',
      'type' => 'js',
      'path' => 'anim-node-plugin/anim-node-plugin-min.js',
      'ext' => false,
    ),
    'anim-scroll' => 
    array (
      'requires' => 
      array (
        0 => 'anim-base',
      ),
      'name' => 'anim-scroll',
      'type' => 'js',
      'path' => 'anim-scroll/anim-scroll-min.js',
      'ext' => false,
    ),
    'anim-xy' => 
    array (
      'requires' => 
      array (
        0 => 'anim-base',
        1 => 'node-screen',
      ),
      'name' => 'anim-xy',
      'type' => 'js',
      'path' => 'anim-xy/anim-xy-min.js',
      'ext' => false,
    ),
    'app' => 
    array (
      'use' => 
      array (
        0 => 'controller',
        1 => 'model',
        2 => 'model-list',
        3 => 'view',
      ),
      'name' => 'app',
      'type' => 'js',
      'path' => 'app/app-min.js',
      'supersedes' => 
      array (
        0 => 'controller',
        1 => 'model',
        2 => 'model-list',
        3 => 'view',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'array-extras' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'array-extras',
      'type' => 'js',
      'path' => 'array-extras/array-extras-min.js',
      'ext' => false,
    ),
    'array-invoke' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'array-invoke',
      'type' => 'js',
      'path' => 'array-invoke/array-invoke-min.js',
      'ext' => false,
    ),
    'arraylist' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'arraylist',
      'type' => 'js',
      'path' => 'arraylist/arraylist-min.js',
      'ext' => false,
    ),
    'arraylist-add' => 
    array (
      'requires' => 
      array (
        0 => 'arraylist',
      ),
      'name' => 'arraylist-add',
      'type' => 'js',
      'path' => 'arraylist-add/arraylist-add-min.js',
      'ext' => false,
    ),
    'arraylist-filter' => 
    array (
      'requires' => 
      array (
        0 => 'arraylist',
      ),
      'name' => 'arraylist-filter',
      'type' => 'js',
      'path' => 'arraylist-filter/arraylist-filter-min.js',
      'ext' => false,
    ),
    'arraysort' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'arraysort',
      'type' => 'js',
      'path' => 'arraysort/arraysort-min.js',
      'ext' => false,
    ),
    'async-queue' => 
    array (
      'requires' => 
      array (
        0 => 'event-custom',
      ),
      'name' => 'async-queue',
      'type' => 'js',
      'path' => 'async-queue/async-queue-min.js',
      'ext' => false,
    ),
    'attribute' => 
    array (
      'use' => 
      array (
        0 => 'attribute-base',
        1 => 'attribute-complex',
      ),
      'name' => 'attribute',
      'type' => 'js',
      'path' => 'attribute/attribute-min.js',
      'supersedes' => 
      array (
        0 => 'attribute-base',
        1 => 'attribute-complex',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'attribute-base' => 
    array (
      'requires' => 
      array (
        0 => 'event-custom',
      ),
      'name' => 'attribute-base',
      'type' => 'js',
      'path' => 'attribute-base/attribute-base-min.js',
      'ext' => false,
    ),
    'attribute-complex' => 
    array (
      'requires' => 
      array (
        0 => 'attribute-base',
      ),
      'name' => 'attribute-complex',
      'type' => 'js',
      'path' => 'attribute-complex/attribute-complex-min.js',
      'ext' => false,
    ),
    'autocomplete' => 
    array (
      'use' => 
      array (
        0 => 'autocomplete-base',
        1 => 'autocomplete-sources',
        2 => 'autocomplete-list',
        3 => 'autocomplete-plugin',
      ),
      'name' => 'autocomplete',
      'type' => 'js',
      'path' => 'autocomplete/autocomplete-min.js',
      'supersedes' => 
      array (
        0 => 'autocomplete-base',
        1 => 'autocomplete-sources',
        2 => 'autocomplete-list',
        3 => 'autocomplete-plugin',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'autocomplete-base' => 
    array (
      'optional' => 
      array (
        0 => 'autocomplete-sources',
      ),
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'base-build',
        2 => 'escape',
        3 => 'event-valuechange',
        4 => 'node-base',
      ),
      'name' => 'autocomplete-base',
      'type' => 'js',
      'path' => 'autocomplete-base/autocomplete-base-min.js',
      'ext' => false,
    ),
    'autocomplete-filters' => 
    array (
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'text-wordbreak',
      ),
      'name' => 'autocomplete-filters',
      'type' => 'js',
      'path' => 'autocomplete-filters/autocomplete-filters-min.js',
      'ext' => false,
    ),
    'autocomplete-filters-accentfold' => 
    array (
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'text-accentfold',
        2 => 'text-wordbreak',
      ),
      'name' => 'autocomplete-filters-accentfold',
      'type' => 'js',
      'path' => 'autocomplete-filters-accentfold/autocomplete-filters-accentfold-min.js',
      'ext' => false,
    ),
    'autocomplete-highlighters' => 
    array (
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'highlight-base',
      ),
      'name' => 'autocomplete-highlighters',
      'type' => 'js',
      'path' => 'autocomplete-highlighters/autocomplete-highlighters-min.js',
      'ext' => false,
    ),
    'autocomplete-highlighters-accentfold' => 
    array (
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'highlight-accentfold',
      ),
      'name' => 'autocomplete-highlighters-accentfold',
      'type' => 'js',
      'path' => 'autocomplete-highlighters-accentfold/autocomplete-highlighters-accentfold-min.js',
      'ext' => false,
    ),
    'autocomplete-list' => 
    array (
      'after' => 
      array (
        0 => 'autocomplete-sources',
      ),
      'lang' => 
      array (
        0 => 'en',
      ),
      'requires' => 
      array (
        0 => 'autocomplete-base',
        1 => 'event-resize',
        2 => 'node-screen',
        3 => 'selector-css3',
        4 => 'shim-plugin',
        5 => 'widget',
        6 => 'widget-position',
        7 => 'widget-position-align',
      ),
      'skinnable' => true,
      'name' => 'autocomplete-list',
      'type' => 'js',
      'path' => 'autocomplete-list/autocomplete-list-min.js',
      'ext' => false,
      'after_map' => 
      array (
        'autocomplete-sources' => true,
      ),
    ),
    'lang/autocomplete-list_en' => 
    array (
      'path' => 'autocomplete-list/lang/autocomplete-list_en.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/autocomplete-list_en',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'autocomplete-list-keys' => 
    array (
      'condition' => 
      array (
        'name' => 'autocomplete-list-keys',
        'trigger' => 'autocomplete-list',
      ),
      'requires' => 
      array (
        0 => 'autocomplete-list',
        1 => 'base-build',
      ),
      'name' => 'autocomplete-list-keys',
      'type' => 'js',
      'path' => 'autocomplete-list-keys/autocomplete-list-keys-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'autocomplete-list',
      ),
      'after_map' => 
      array (
        'autocomplete-list' => true,
      ),
    ),
    'autocomplete-plugin' => 
    array (
      'requires' => 
      array (
        0 => 'autocomplete-list',
        1 => 'node-pluginhost',
      ),
      'name' => 'autocomplete-plugin',
      'type' => 'js',
      'path' => 'autocomplete-plugin/autocomplete-plugin-min.js',
      'ext' => false,
    ),
    'autocomplete-sources' => 
    array (
      'optional' => 
      array (
        0 => 'io-base',
        1 => 'json-parse',
        2 => 'jsonp',
        3 => 'yql',
      ),
      'requires' => 
      array (
        0 => 'autocomplete-base',
      ),
      'name' => 'autocomplete-sources',
      'type' => 'js',
      'path' => 'autocomplete-sources/autocomplete-sources-min.js',
      'ext' => false,
    ),
    'base' => 
    array (
      'use' => 
      array (
        0 => 'base-base',
        1 => 'base-pluginhost',
        2 => 'base-build',
      ),
      'name' => 'base',
      'type' => 'js',
      'path' => 'base/base-min.js',
      'supersedes' => 
      array (
        0 => 'base-base',
        1 => 'base-pluginhost',
        2 => 'base-build',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'base-base' => 
    array (
      'after' => 
      array (
        0 => 'attribute-complex',
      ),
      'requires' => 
      array (
        0 => 'attribute-base',
      ),
      'name' => 'base-base',
      'type' => 'js',
      'path' => 'base-base/base-base-min.js',
      'ext' => false,
      'after_map' => 
      array (
        'attribute-complex' => true,
      ),
    ),
    'base-build' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
      ),
      'name' => 'base-build',
      'type' => 'js',
      'path' => 'base-build/base-build-min.js',
      'ext' => false,
    ),
    'base-pluginhost' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'pluginhost',
      ),
      'name' => 'base-pluginhost',
      'type' => 'js',
      'path' => 'base-pluginhost/base-pluginhost-min.js',
      'ext' => false,
    ),
    'cache' => 
    array (
      'use' => 
      array (
        0 => 'cache-base',
        1 => 'cache-offline',
        2 => 'cache-plugin',
      ),
      'name' => 'cache',
      'type' => 'js',
      'path' => 'cache/cache-min.js',
      'supersedes' => 
      array (
        0 => 'cache-base',
        1 => 'cache-offline',
        2 => 'cache-plugin',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'cache-base' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'base-pluginhost',
        2 => 'base-build',
      ),
      'name' => 'cache-base',
      'type' => 'js',
      'path' => 'cache-base/cache-base-min.js',
      'ext' => false,
    ),
    'cache-offline' => 
    array (
      'requires' => 
      array (
        0 => 'cache-base',
        1 => 'json',
      ),
      'name' => 'cache-offline',
      'type' => 'js',
      'path' => 'cache-offline/cache-offline-min.js',
      'ext' => false,
    ),
    'cache-plugin' => 
    array (
      'requires' => 
      array (
        0 => 'plugin',
        1 => 'cache-base',
      ),
      'name' => 'cache-plugin',
      'type' => 'js',
      'path' => 'cache-plugin/cache-plugin-min.js',
      'ext' => false,
    ),
    'calendar' => 
    array (
      'lang' => 
      array (
        0 => 'en',
        1 => 'ja',
        2 => 'ru',
      ),
      'requires' => 
      array (
        0 => 'calendar-base',
        1 => 'calendarnavigator',
      ),
      'skinnable' => true,
      'name' => 'calendar',
      'type' => 'js',
      'path' => 'calendar/calendar-min.js',
      'ext' => false,
    ),
    'lang/calendar_en' => 
    array (
      'path' => 'calendar/lang/calendar_en.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/calendar_en',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/calendar_ja' => 
    array (
      'path' => 'calendar/lang/calendar_ja.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/calendar_ja',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/calendar_ru' => 
    array (
      'path' => 'calendar/lang/calendar_ru.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/calendar_ru',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'calendar-base' => 
    array (
      'lang' => 
      array (
        0 => 'en',
        1 => 'ja',
        2 => 'ru',
      ),
      'requires' => 
      array (
        0 => 'widget',
        1 => 'substitute',
        2 => 'datatype-date',
        3 => 'datatype-date-math',
        4 => 'cssgrids',
      ),
      'skinnable' => true,
      'name' => 'calendar-base',
      'type' => 'js',
      'path' => 'calendar-base/calendar-base-min.js',
      'ext' => false,
    ),
    'lang/calendar-base_en' => 
    array (
      'path' => 'calendar-base/lang/calendar-base_en.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/calendar-base_en',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/calendar-base_ja' => 
    array (
      'path' => 'calendar-base/lang/calendar-base_ja.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/calendar-base_ja',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/calendar-base_ru' => 
    array (
      'path' => 'calendar-base/lang/calendar-base_ru.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/calendar-base_ru',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'calendarnavigator' => 
    array (
      'requires' => 
      array (
        0 => 'plugin',
        1 => 'classnamemanager',
        2 => 'datatype-date',
        3 => 'node',
        4 => 'substitute',
      ),
      'skinnable' => true,
      'name' => 'calendarnavigator',
      'type' => 'js',
      'path' => 'calendarnavigator/calendarnavigator-min.js',
      'ext' => false,
    ),
    'charts' => 
    array (
      'requires' => 
      array (
        0 => 'dom',
        1 => 'datatype-number',
        2 => 'datatype-date',
        3 => 'event-custom',
        4 => 'event-mouseenter',
        5 => 'widget',
        6 => 'widget-position',
        7 => 'widget-stack',
        8 => 'graphics',
      ),
      'name' => 'charts',
      'type' => 'js',
      'path' => 'charts/charts-min.js',
      'ext' => false,
    ),
    'classnamemanager' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'classnamemanager',
      'type' => 'js',
      'path' => 'classnamemanager/classnamemanager-min.js',
      'ext' => false,
    ),
    'clickable-rail' => 
    array (
      'requires' => 
      array (
        0 => 'slider-base',
      ),
      'name' => 'clickable-rail',
      'type' => 'js',
      'path' => 'clickable-rail/clickable-rail-min.js',
      'ext' => false,
    ),
    'collection' => 
    array (
      'use' => 
      array (
        0 => 'array-extras',
        1 => 'arraylist',
        2 => 'arraylist-add',
        3 => 'arraylist-filter',
        4 => 'array-invoke',
      ),
      'name' => 'collection',
      'type' => 'js',
      'path' => 'collection/collection-min.js',
      'supersedes' => 
      array (
        0 => 'array-extras',
        1 => 'arraylist',
        2 => 'arraylist-add',
        3 => 'arraylist-filter',
        4 => 'array-invoke',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'console' => 
    array (
      'lang' => 
      array (
        0 => 'en',
        1 => 'es',
        2 => 'ja',
      ),
      'requires' => 
      array (
        0 => 'yui-log',
        1 => 'widget',
        2 => 'substitute',
      ),
      'skinnable' => true,
      'name' => 'console',
      'type' => 'js',
      'path' => 'console/console-min.js',
      'ext' => false,
    ),
    'lang/console_en' => 
    array (
      'path' => 'console/lang/console_en.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/console_en',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/console_es' => 
    array (
      'path' => 'console/lang/console_es.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/console_es',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/console_ja' => 
    array (
      'path' => 'console/lang/console_ja.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/console_ja',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'console-filters' => 
    array (
      'requires' => 
      array (
        0 => 'plugin',
        1 => 'console',
      ),
      'skinnable' => true,
      'name' => 'console-filters',
      'type' => 'js',
      'path' => 'console-filters/console-filters-min.js',
      'ext' => false,
    ),
    'controller' => 
    array (
      'optional' => 
      array (
        0 => 'querystring-parse',
      ),
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'base-build',
        2 => 'history',
      ),
      'name' => 'controller',
      'type' => 'js',
      'path' => 'controller/controller-min.js',
      'ext' => false,
    ),
    'cookie' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'cookie',
      'type' => 'js',
      'path' => 'cookie/cookie-min.js',
      'ext' => false,
    ),
    'createlink-base' => 
    array (
      'requires' => 
      array (
        0 => 'editor-base',
      ),
      'name' => 'createlink-base',
      'type' => 'js',
      'path' => 'createlink-base/createlink-base-min.js',
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
      'type' => 'css',
      'name' => 'cssbase',
      'path' => 'cssbase/cssbase-min.css',
      'ext' => false,
      'requires' => 
      array (
      ),
      'after_map' => 
      array (
        'cssreset' => true,
        'cssfonts' => true,
        'cssgrids' => true,
        'cssreset-context' => true,
        'cssfonts-context' => true,
        'cssgrids-context' => true,
      ),
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
      'type' => 'css',
      'name' => 'cssbase-context',
      'path' => 'cssbase-context/cssbase-context-min.css',
      'ext' => false,
      'requires' => 
      array (
      ),
      'after_map' => 
      array (
        'cssreset' => true,
        'cssfonts' => true,
        'cssgrids' => true,
        'cssreset-context' => true,
        'cssfonts-context' => true,
        'cssgrids-context' => true,
      ),
    ),
    'cssfonts' => 
    array (
      'type' => 'css',
      'name' => 'cssfonts',
      'path' => 'cssfonts/cssfonts-min.css',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'cssfonts-context' => 
    array (
      'type' => 'css',
      'name' => 'cssfonts-context',
      'path' => 'cssfonts-context/cssfonts-context-min.css',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'cssgrids' => 
    array (
      'optional' => 
      array (
        0 => 'cssreset',
        1 => 'cssfonts',
      ),
      'type' => 'css',
      'name' => 'cssgrids',
      'path' => 'cssgrids/cssgrids-min.css',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'cssreset' => 
    array (
      'type' => 'css',
      'name' => 'cssreset',
      'path' => 'cssreset/cssreset-min.css',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'cssreset-context' => 
    array (
      'type' => 'css',
      'name' => 'cssreset-context',
      'path' => 'cssreset-context/cssreset-context-min.css',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'dataschema' => 
    array (
      'use' => 
      array (
        0 => 'dataschema-base',
        1 => 'dataschema-json',
        2 => 'dataschema-xml',
        3 => 'dataschema-array',
        4 => 'dataschema-text',
      ),
      'name' => 'dataschema',
      'type' => 'js',
      'path' => 'dataschema/dataschema-min.js',
      'supersedes' => 
      array (
        0 => 'dataschema-base',
        1 => 'dataschema-json',
        2 => 'dataschema-xml',
        3 => 'dataschema-array',
        4 => 'dataschema-text',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'dataschema-array' => 
    array (
      'requires' => 
      array (
        0 => 'dataschema-base',
      ),
      'name' => 'dataschema-array',
      'type' => 'js',
      'path' => 'dataschema-array/dataschema-array-min.js',
      'ext' => false,
    ),
    'dataschema-base' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'base-pluginhost',
        2 => 'base-build',
      ),
      'name' => 'dataschema-base',
      'type' => 'js',
      'path' => 'dataschema-base/dataschema-base-min.js',
      'ext' => false,
    ),
    'dataschema-json' => 
    array (
      'requires' => 
      array (
        0 => 'dataschema-base',
        1 => 'json',
      ),
      'name' => 'dataschema-json',
      'type' => 'js',
      'path' => 'dataschema-json/dataschema-json-min.js',
      'ext' => false,
    ),
    'dataschema-text' => 
    array (
      'requires' => 
      array (
        0 => 'dataschema-base',
      ),
      'name' => 'dataschema-text',
      'type' => 'js',
      'path' => 'dataschema-text/dataschema-text-min.js',
      'ext' => false,
    ),
    'dataschema-xml' => 
    array (
      'requires' => 
      array (
        0 => 'dataschema-base',
      ),
      'name' => 'dataschema-xml',
      'type' => 'js',
      'path' => 'dataschema-xml/dataschema-xml-min.js',
      'ext' => false,
    ),
    'datasource' => 
    array (
      'use' => 
      array (
        0 => 'datasource-local',
        1 => 'datasource-io',
        2 => 'datasource-get',
        3 => 'datasource-function',
        4 => 'datasource-cache',
        5 => 'datasource-jsonschema',
        6 => 'datasource-xmlschema',
        7 => 'datasource-arrayschema',
        8 => 'datasource-textschema',
        9 => 'datasource-polling',
      ),
      'name' => 'datasource',
      'type' => 'js',
      'path' => 'datasource/datasource-min.js',
      'supersedes' => 
      array (
        0 => 'datasource-local',
        1 => 'datasource-io',
        2 => 'datasource-get',
        3 => 'datasource-function',
        4 => 'datasource-cache',
        5 => 'datasource-jsonschema',
        6 => 'datasource-xmlschema',
        7 => 'datasource-arrayschema',
        8 => 'datasource-textschema',
        9 => 'datasource-polling',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datasource-arrayschema' => 
    array (
      'requires' => 
      array (
        0 => 'datasource-local',
        1 => 'plugin',
        2 => 'dataschema-array',
      ),
      'name' => 'datasource-arrayschema',
      'type' => 'js',
      'path' => 'datasource-arrayschema/datasource-arrayschema-min.js',
      'ext' => false,
    ),
    'datasource-cache' => 
    array (
      'requires' => 
      array (
        0 => 'datasource-local',
        1 => 'plugin',
        2 => 'cache-base',
      ),
      'name' => 'datasource-cache',
      'type' => 'js',
      'path' => 'datasource-cache/datasource-cache-min.js',
      'ext' => false,
    ),
    'datasource-function' => 
    array (
      'requires' => 
      array (
        0 => 'datasource-local',
      ),
      'name' => 'datasource-function',
      'type' => 'js',
      'path' => 'datasource-function/datasource-function-min.js',
      'ext' => false,
    ),
    'datasource-get' => 
    array (
      'requires' => 
      array (
        0 => 'datasource-local',
        1 => 'get',
      ),
      'name' => 'datasource-get',
      'type' => 'js',
      'path' => 'datasource-get/datasource-get-min.js',
      'ext' => false,
    ),
    'datasource-io' => 
    array (
      'requires' => 
      array (
        0 => 'datasource-local',
        1 => 'io-base',
      ),
      'name' => 'datasource-io',
      'type' => 'js',
      'path' => 'datasource-io/datasource-io-min.js',
      'ext' => false,
    ),
    'datasource-jsonschema' => 
    array (
      'requires' => 
      array (
        0 => 'datasource-local',
        1 => 'plugin',
        2 => 'dataschema-json',
      ),
      'name' => 'datasource-jsonschema',
      'type' => 'js',
      'path' => 'datasource-jsonschema/datasource-jsonschema-min.js',
      'ext' => false,
    ),
    'datasource-local' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'base-pluginhost',
        2 => 'base-build',
      ),
      'name' => 'datasource-local',
      'type' => 'js',
      'path' => 'datasource-local/datasource-local-min.js',
      'ext' => false,
    ),
    'datasource-polling' => 
    array (
      'requires' => 
      array (
        0 => 'datasource-local',
      ),
      'name' => 'datasource-polling',
      'type' => 'js',
      'path' => 'datasource-polling/datasource-polling-min.js',
      'ext' => false,
    ),
    'datasource-textschema' => 
    array (
      'requires' => 
      array (
        0 => 'datasource-local',
        1 => 'plugin',
        2 => 'dataschema-text',
      ),
      'name' => 'datasource-textschema',
      'type' => 'js',
      'path' => 'datasource-textschema/datasource-textschema-min.js',
      'ext' => false,
    ),
    'datasource-xmlschema' => 
    array (
      'requires' => 
      array (
        0 => 'datasource-local',
        1 => 'plugin',
        2 => 'dataschema-xml',
      ),
      'name' => 'datasource-xmlschema',
      'type' => 'js',
      'path' => 'datasource-xmlschema/datasource-xmlschema-min.js',
      'ext' => false,
    ),
    'datatable' => 
    array (
      'use' => 
      array (
        0 => 'datatable-base',
        1 => 'datatable-datasource',
        2 => 'datatable-sort',
        3 => 'datatable-scroll',
      ),
      'name' => 'datatable',
      'type' => 'js',
      'path' => 'datatable/datatable-min.js',
      'supersedes' => 
      array (
        0 => 'datatable-base',
        1 => 'datatable-datasource',
        2 => 'datatable-sort',
        3 => 'datatable-scroll',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datatable-base' => 
    array (
      'requires' => 
      array (
        0 => 'recordset-base',
        1 => 'widget',
        2 => 'substitute',
        3 => 'event-mouseenter',
      ),
      'skinnable' => true,
      'name' => 'datatable-base',
      'type' => 'js',
      'path' => 'datatable-base/datatable-base-min.js',
      'ext' => false,
    ),
    'datatable-datasource' => 
    array (
      'requires' => 
      array (
        0 => 'datatable-base',
        1 => 'plugin',
        2 => 'datasource-local',
      ),
      'name' => 'datatable-datasource',
      'type' => 'js',
      'path' => 'datatable-datasource/datatable-datasource-min.js',
      'ext' => false,
    ),
    'datatable-scroll' => 
    array (
      'requires' => 
      array (
        0 => 'datatable-base',
        1 => 'plugin',
      ),
      'name' => 'datatable-scroll',
      'type' => 'js',
      'path' => 'datatable-scroll/datatable-scroll-min.js',
      'ext' => false,
    ),
    'datatable-sort' => 
    array (
      'lang' => 
      array (
        0 => 'en',
      ),
      'requires' => 
      array (
        0 => 'datatable-base',
        1 => 'plugin',
        2 => 'recordset-sort',
      ),
      'name' => 'datatable-sort',
      'type' => 'js',
      'path' => 'datatable-sort/datatable-sort-min.js',
      'ext' => false,
    ),
    'lang/datatable-sort_en' => 
    array (
      'path' => 'datatable-sort/lang/datatable-sort_en.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatable-sort_en',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'datatype' => 
    array (
      'use' => 
      array (
        0 => 'datatype-number',
        1 => 'datatype-date',
        2 => 'datatype-xml',
      ),
      'name' => 'datatype',
      'type' => 'js',
      'path' => 'datatype/datatype-min.js',
      'supersedes' => 
      array (
        0 => 'datatype-number',
        1 => 'datatype-date',
        2 => 'datatype-xml',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datatype-date' => 
    array (
      'supersedes' => 
      array (
        0 => 'datatype-date-format',
      ),
      'use' => 
      array (
        0 => 'datatype-date-parse',
        1 => 'datatype-date-format',
      ),
      'name' => 'datatype-date',
      'type' => 'js',
      'path' => 'datatype-date/datatype-date-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datatype-date-format' => 
    array (
      'lang' => 
      array (
        0 => 'ar',
        1 => 'ar-JO',
        2 => 'ca',
        3 => 'ca-ES',
        4 => 'da',
        5 => 'da-DK',
        6 => 'de',
        7 => 'de-AT',
        8 => 'de-DE',
        9 => 'el',
        10 => 'el-GR',
        11 => 'en',
        12 => 'en-AU',
        13 => 'en-CA',
        14 => 'en-GB',
        15 => 'en-IE',
        16 => 'en-IN',
        17 => 'en-JO',
        18 => 'en-MY',
        19 => 'en-NZ',
        20 => 'en-PH',
        21 => 'en-SG',
        22 => 'en-US',
        23 => 'es',
        24 => 'es-AR',
        25 => 'es-BO',
        26 => 'es-CL',
        27 => 'es-CO',
        28 => 'es-EC',
        29 => 'es-ES',
        30 => 'es-MX',
        31 => 'es-PE',
        32 => 'es-PY',
        33 => 'es-US',
        34 => 'es-UY',
        35 => 'es-VE',
        36 => 'fi',
        37 => 'fi-FI',
        38 => 'fr',
        39 => 'fr-BE',
        40 => 'fr-CA',
        41 => 'fr-FR',
        42 => 'hi',
        43 => 'hi-IN',
        44 => 'id',
        45 => 'id-ID',
        46 => 'it',
        47 => 'it-IT',
        48 => 'ja',
        49 => 'ja-JP',
        50 => 'ko',
        51 => 'ko-KR',
        52 => 'ms',
        53 => 'ms-MY',
        54 => 'nb',
        55 => 'nb-NO',
        56 => 'nl',
        57 => 'nl-BE',
        58 => 'nl-NL',
        59 => 'pl',
        60 => 'pl-PL',
        61 => 'pt',
        62 => 'pt-BR',
        63 => 'ro',
        64 => 'ro-RO',
        65 => 'ru',
        66 => 'ru-RU',
        67 => 'sv',
        68 => 'sv-SE',
        69 => 'th',
        70 => 'th-TH',
        71 => 'tr',
        72 => 'tr-TR',
        73 => 'vi',
        74 => 'vi-VN',
        75 => 'zh-Hans',
        76 => 'zh-Hans-CN',
        77 => 'zh-Hant',
        78 => 'zh-Hant-HK',
        79 => 'zh-Hant-TW',
      ),
      'name' => 'datatype-date-format',
      'type' => 'js',
      'path' => 'datatype-date-format/datatype-date-format-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ar' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ar.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ar',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ar-JO' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ar-JO.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ar-JO',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ca' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ca.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ca',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ca-ES' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ca-ES.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ca-ES',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_da' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_da.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_da',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_da-DK' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_da-DK.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_da-DK',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_de' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_de.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_de',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_de-AT' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_de-AT.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_de-AT',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_de-DE' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_de-DE.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_de-DE',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_el' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_el.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_el',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_el-GR' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_el-GR.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_el-GR',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-AU' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-AU.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-AU',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-CA' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-CA.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-CA',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-GB' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-GB.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-GB',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-IE' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-IE.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-IE',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-IN' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-IN.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-IN',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-JO' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-JO.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-JO',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-MY' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-MY.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-MY',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-NZ' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-NZ.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-NZ',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-PH' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-PH.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-PH',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-SG' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-SG.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-SG',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_en-US' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_en-US.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_en-US',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-AR' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-AR.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-AR',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-BO' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-BO.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-BO',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-CL' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-CL.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-CL',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-CO' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-CO.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-CO',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-EC' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-EC.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-EC',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-ES' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-ES.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-ES',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-MX' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-MX.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-MX',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-PE' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-PE.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-PE',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-PY' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-PY.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-PY',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-US' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-US.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-US',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-UY' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-UY.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-UY',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_es-VE' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_es-VE.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_es-VE',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_fi' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_fi.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_fi',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_fi-FI' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_fi-FI.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_fi-FI',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_fr' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_fr.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_fr',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_fr-BE' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_fr-BE.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_fr-BE',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_fr-CA' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_fr-CA.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_fr-CA',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_fr-FR' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_fr-FR.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_fr-FR',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_hi' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_hi.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_hi',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_hi-IN' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_hi-IN.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_hi-IN',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_id' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_id.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_id',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_id-ID' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_id-ID.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_id-ID',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_it' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_it.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_it',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_it-IT' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_it-IT.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_it-IT',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ja' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ja.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ja',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ja-JP' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ja-JP.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ja-JP',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ko' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ko.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ko',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ko-KR' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ko-KR.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ko-KR',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ms' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ms.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ms',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ms-MY' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ms-MY.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ms-MY',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_nb' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_nb.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_nb',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_nb-NO' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_nb-NO.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_nb-NO',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_nl' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_nl.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_nl',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_nl-BE' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_nl-BE.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_nl-BE',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_nl-NL' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_nl-NL.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_nl-NL',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_pl' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_pl.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_pl',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_pl-PL' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_pl-PL.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_pl-PL',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_pt' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_pt.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_pt',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_pt-BR' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_pt-BR.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_pt-BR',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ro' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ro.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ro',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ro-RO' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ro-RO.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ro-RO',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ru' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ru.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ru',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_ru-RU' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_ru-RU.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_ru-RU',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_sv' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_sv.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_sv',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_sv-SE' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_sv-SE.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_sv-SE',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_th' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_th.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_th',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_th-TH' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_th-TH.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_th-TH',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_tr' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_tr.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_tr',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_tr-TR' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_tr-TR.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_tr-TR',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_vi' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_vi.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_vi',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_vi-VN' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_vi-VN.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_vi-VN',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_zh-Hans' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_zh-Hans.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_zh-Hans',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_zh-Hans-CN' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_zh-Hans-CN.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_zh-Hans-CN',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_zh-Hant' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_zh-Hant.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_zh-Hant',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_zh-Hant-HK' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_zh-Hant-HK.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_zh-Hant-HK',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/datatype-date-format_zh-Hant-TW' => 
    array (
      'path' => 'datatype-date-format/lang/datatype-date-format_zh-Hant-TW.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/datatype-date-format_zh-Hant-TW',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'datatype-date-math' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'datatype-date-math',
      'type' => 'js',
      'path' => 'datatype-date-math/datatype-date-math-min.js',
      'ext' => false,
    ),
    'datatype-date-parse' => 
    array (
      'name' => 'datatype-date-parse',
      'type' => 'js',
      'path' => 'datatype-date-parse/datatype-date-parse-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datatype-number' => 
    array (
      'use' => 
      array (
        0 => 'datatype-number-parse',
        1 => 'datatype-number-format',
      ),
      'name' => 'datatype-number',
      'type' => 'js',
      'path' => 'datatype-number/datatype-number-min.js',
      'supersedes' => 
      array (
        0 => 'datatype-number-parse',
        1 => 'datatype-number-format',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datatype-number-format' => 
    array (
      'name' => 'datatype-number-format',
      'type' => 'js',
      'path' => 'datatype-number-format/datatype-number-format-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datatype-number-parse' => 
    array (
      'name' => 'datatype-number-parse',
      'type' => 'js',
      'path' => 'datatype-number-parse/datatype-number-parse-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datatype-xml' => 
    array (
      'use' => 
      array (
        0 => 'datatype-xml-parse',
        1 => 'datatype-xml-format',
      ),
      'name' => 'datatype-xml',
      'type' => 'js',
      'path' => 'datatype-xml/datatype-xml-min.js',
      'supersedes' => 
      array (
        0 => 'datatype-xml-parse',
        1 => 'datatype-xml-format',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datatype-xml-format' => 
    array (
      'name' => 'datatype-xml-format',
      'type' => 'js',
      'path' => 'datatype-xml-format/datatype-xml-format-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'datatype-xml-parse' => 
    array (
      'name' => 'datatype-xml-parse',
      'type' => 'js',
      'path' => 'datatype-xml-parse/datatype-xml-parse-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'dd' => 
    array (
      'use' => 
      array (
        0 => 'dd-ddm-base',
        1 => 'dd-ddm',
        2 => 'dd-ddm-drop',
        3 => 'dd-drag',
        4 => 'dd-proxy',
        5 => 'dd-constrain',
        6 => 'dd-drop',
        7 => 'dd-scroll',
        8 => 'dd-delegate',
      ),
      'name' => 'dd',
      'type' => 'js',
      'path' => 'dd/dd-min.js',
      'supersedes' => 
      array (
        0 => 'dd-ddm-base',
        1 => 'dd-ddm',
        2 => 'dd-ddm-drop',
        3 => 'dd-drag',
        4 => 'dd-proxy',
        5 => 'dd-constrain',
        6 => 'dd-drop',
        7 => 'dd-scroll',
        8 => 'dd-delegate',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'dd-constrain' => 
    array (
      'requires' => 
      array (
        0 => 'dd-drag',
      ),
      'name' => 'dd-constrain',
      'type' => 'js',
      'path' => 'dd-constrain/dd-constrain-min.js',
      'ext' => false,
    ),
    'dd-ddm' => 
    array (
      'requires' => 
      array (
        0 => 'dd-ddm-base',
        1 => 'event-resize',
      ),
      'name' => 'dd-ddm',
      'type' => 'js',
      'path' => 'dd-ddm/dd-ddm-min.js',
      'ext' => false,
    ),
    'dd-ddm-base' => 
    array (
      'requires' => 
      array (
        0 => 'node',
        1 => 'base-base',
        2 => 'base-pluginhost',
        3 => 'base-build',
        4 => 'yui-throttle',
        5 => 'classnamemanager',
      ),
      'name' => 'dd-ddm-base',
      'type' => 'js',
      'path' => 'dd-ddm-base/dd-ddm-base-min.js',
      'ext' => false,
    ),
    'dd-ddm-drop' => 
    array (
      'requires' => 
      array (
        0 => 'dd-ddm',
      ),
      'name' => 'dd-ddm-drop',
      'type' => 'js',
      'path' => 'dd-ddm-drop/dd-ddm-drop-min.js',
      'ext' => false,
    ),
    'dd-delegate' => 
    array (
      'requires' => 
      array (
        0 => 'dd-drag',
        1 => 'dd-drop-plugin',
        2 => 'event-mouseenter',
      ),
      'name' => 'dd-delegate',
      'type' => 'js',
      'path' => 'dd-delegate/dd-delegate-min.js',
      'ext' => false,
    ),
    'dd-drag' => 
    array (
      'requires' => 
      array (
        0 => 'dd-ddm-base',
      ),
      'name' => 'dd-drag',
      'type' => 'js',
      'path' => 'dd-drag/dd-drag-min.js',
      'ext' => false,
    ),
    'dd-drop' => 
    array (
      'requires' => 
      array (
        0 => 'dd-drag',
        1 => 'dd-ddm-drop',
      ),
      'name' => 'dd-drop',
      'type' => 'js',
      'path' => 'dd-drop/dd-drop-min.js',
      'ext' => false,
    ),
    'dd-drop-plugin' => 
    array (
      'requires' => 
      array (
        0 => 'dd-drop',
      ),
      'name' => 'dd-drop-plugin',
      'type' => 'js',
      'path' => 'dd-drop-plugin/dd-drop-plugin-min.js',
      'ext' => false,
    ),
    'dd-gestures' => 
    array (
      'condition' => 
      array (
        'name' => 'dd-gestures',
        'trigger' => 'dd-drag',
      ),
      'requires' => 
      array (
        0 => 'dd-drag',
        1 => 'event-synthetic',
        2 => 'event-gestures',
      ),
      'name' => 'dd-gestures',
      'type' => 'js',
      'path' => 'dd-gestures/dd-gestures-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'dd-drag',
      ),
      'after_map' => 
      array (
        'dd-drag' => true,
      ),
    ),
    'dd-plugin' => 
    array (
      'optional' => 
      array (
        0 => 'dd-constrain',
        1 => 'dd-proxy',
      ),
      'requires' => 
      array (
        0 => 'dd-drag',
      ),
      'name' => 'dd-plugin',
      'type' => 'js',
      'path' => 'dd-plugin/dd-plugin-min.js',
      'ext' => false,
    ),
    'dd-proxy' => 
    array (
      'requires' => 
      array (
        0 => 'dd-drag',
      ),
      'name' => 'dd-proxy',
      'type' => 'js',
      'path' => 'dd-proxy/dd-proxy-min.js',
      'ext' => false,
    ),
    'dd-scroll' => 
    array (
      'requires' => 
      array (
        0 => 'dd-drag',
      ),
      'name' => 'dd-scroll',
      'type' => 'js',
      'path' => 'dd-scroll/dd-scroll-min.js',
      'ext' => false,
    ),
    'dial' => 
    array (
      'lang' => 
      array (
        0 => 'en',
        1 => 'es',
      ),
      'requires' => 
      array (
        0 => 'widget',
        1 => 'dd-drag',
        2 => 'substitute',
        3 => 'event-mouseenter',
        4 => 'event-move',
        5 => 'event-key',
        6 => 'transition',
        7 => 'intl',
      ),
      'skinnable' => true,
      'name' => 'dial',
      'type' => 'js',
      'path' => 'dial/dial-min.js',
      'ext' => false,
    ),
    'lang/dial_en' => 
    array (
      'path' => 'dial/lang/dial_en.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/dial_en',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'lang/dial_es' => 
    array (
      'path' => 'dial/lang/dial_es.js',
      'intl' => true,
      'langPack' => true,
      'ext' => false,
      'supersedes' => 
      array (
      ),
      'name' => 'lang/dial_es',
      'type' => 'js',
      'requires' => 
      array (
      ),
    ),
    'dom' => 
    array (
      'use' => 
      array (
        0 => 'dom-base',
        1 => 'dom-screen',
        2 => 'dom-style',
        3 => 'selector-native',
        4 => 'selector',
      ),
      'name' => 'dom',
      'type' => 'js',
      'path' => 'dom/dom-min.js',
      'supersedes' => 
      array (
        0 => 'dom-base',
        1 => 'dom-screen',
        2 => 'dom-style',
        3 => 'selector-native',
        4 => 'selector',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'dom-base' => 
    array (
      'requires' => 
      array (
        0 => 'dom-core',
      ),
      'name' => 'dom-base',
      'type' => 'js',
      'path' => 'dom-base/dom-base-min.js',
      'ext' => false,
    ),
    'dom-core' => 
    array (
      'requires' => 
      array (
        0 => 'oop',
        1 => 'features',
      ),
      'name' => 'dom-core',
      'type' => 'js',
      'path' => 'dom-core/dom-core-min.js',
      'ext' => false,
    ),
    'dom-deprecated' => 
    array (
      'requires' => 
      array (
        0 => 'dom-base',
      ),
      'name' => 'dom-deprecated',
      'type' => 'js',
      'path' => 'dom-deprecated/dom-deprecated-min.js',
      'ext' => false,
    ),
    'dom-screen' => 
    array (
      'requires' => 
      array (
        0 => 'dom-base',
        1 => 'dom-style',
      ),
      'name' => 'dom-screen',
      'type' => 'js',
      'path' => 'dom-screen/dom-screen-min.js',
      'ext' => false,
    ),
    'dom-style' => 
    array (
      'requires' => 
      array (
        0 => 'dom-base',
      ),
      'name' => 'dom-style',
      'type' => 'js',
      'path' => 'dom-style/dom-style-min.js',
      'ext' => false,
    ),
    'dom-style-ie' => 
    array (
      'condition' => 
      array (
        'name' => 'dom-style-ie',
        'trigger' => 'dom-style',
      ),
      'requires' => 
      array (
        0 => 'dom-style',
      ),
      'name' => 'dom-style-ie',
      'type' => 'js',
      'path' => 'dom-style-ie/dom-style-ie-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'dom-style',
      ),
      'after_map' => 
      array (
        'dom-style' => true,
      ),
    ),
    'dump' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'dump',
      'type' => 'js',
      'path' => 'dump/dump-min.js',
      'ext' => false,
    ),
    'editor' => 
    array (
      'use' => 
      array (
        0 => 'frame',
        1 => 'selection',
        2 => 'exec-command',
        3 => 'editor-base',
        4 => 'editor-para',
        5 => 'editor-br',
        6 => 'editor-bidi',
        7 => 'editor-tab',
        8 => 'createlink-base',
      ),
      'name' => 'editor',
      'type' => 'js',
      'path' => 'editor/editor-min.js',
      'supersedes' => 
      array (
        0 => 'frame',
        1 => 'selection',
        2 => 'exec-command',
        3 => 'editor-base',
        4 => 'editor-para',
        5 => 'editor-br',
        6 => 'editor-bidi',
        7 => 'editor-tab',
        8 => 'createlink-base',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'editor-base' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'base-pluginhost',
        2 => 'base-build',
        3 => 'frame',
        4 => 'node',
        5 => 'exec-command',
        6 => 'selection',
      ),
      'name' => 'editor-base',
      'type' => 'js',
      'path' => 'editor-base/editor-base-min.js',
      'ext' => false,
    ),
    'editor-bidi' => 
    array (
      'requires' => 
      array (
        0 => 'editor-base',
      ),
      'name' => 'editor-bidi',
      'type' => 'js',
      'path' => 'editor-bidi/editor-bidi-min.js',
      'ext' => false,
    ),
    'editor-br' => 
    array (
      'requires' => 
      array (
        0 => 'editor-base',
      ),
      'name' => 'editor-br',
      'type' => 'js',
      'path' => 'editor-br/editor-br-min.js',
      'ext' => false,
    ),
    'editor-lists' => 
    array (
      'requires' => 
      array (
        0 => 'editor-base',
      ),
      'name' => 'editor-lists',
      'type' => 'js',
      'path' => 'editor-lists/editor-lists-min.js',
      'ext' => false,
    ),
    'editor-para' => 
    array (
      'requires' => 
      array (
        0 => 'editor-base',
      ),
      'name' => 'editor-para',
      'type' => 'js',
      'path' => 'editor-para/editor-para-min.js',
      'ext' => false,
    ),
    'editor-tab' => 
    array (
      'requires' => 
      array (
        0 => 'editor-base',
      ),
      'name' => 'editor-tab',
      'type' => 'js',
      'path' => 'editor-tab/editor-tab-min.js',
      'ext' => false,
    ),
    'escape' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'escape',
      'type' => 'js',
      'path' => 'escape/escape-min.js',
      'ext' => false,
    ),
    'event' => 
    array (
      'after' => 
      array (
        0 => 'node-base',
      ),
      'use' => 
      array (
        0 => 'event-base',
        1 => 'event-delegate',
        2 => 'event-synthetic',
        3 => 'event-mousewheel',
        4 => 'event-mouseenter',
        5 => 'event-key',
        6 => 'event-focus',
        7 => 'event-resize',
        8 => 'event-hover',
        9 => 'event-outside',
      ),
      'name' => 'event',
      'type' => 'js',
      'path' => 'event/event-min.js',
      'supersedes' => 
      array (
        0 => 'event-base',
        1 => 'event-delegate',
        2 => 'event-synthetic',
        3 => 'event-mousewheel',
        4 => 'event-mouseenter',
        5 => 'event-key',
        6 => 'event-focus',
        7 => 'event-resize',
        8 => 'event-hover',
        9 => 'event-outside',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
      'after_map' => 
      array (
        'node-base' => true,
      ),
    ),
    'event-base' => 
    array (
      'after' => 
      array (
        0 => 'node-base',
      ),
      'requires' => 
      array (
        0 => 'event-custom-base',
      ),
      'name' => 'event-base',
      'type' => 'js',
      'path' => 'event-base/event-base-min.js',
      'ext' => false,
      'after_map' => 
      array (
        'node-base' => true,
      ),
    ),
    'event-base-ie' => 
    array (
      'after' => 
      array (
        0 => 'event-base',
        1 => 'node-base',
      ),
      'condition' => 
      array (
        'name' => 'event-base-ie',
        'trigger' => 'node-base',
      ),
      'requires' => 
      array (
        0 => 'node-base',
      ),
      'name' => 'event-base-ie',
      'type' => 'js',
      'path' => 'event-base-ie/event-base-ie-min.js',
      'ext' => false,
      'after_map' => 
      array (
        'event-base' => true,
        'node-base' => true,
      ),
    ),
    'event-custom' => 
    array (
      'use' => 
      array (
        0 => 'event-custom-base',
        1 => 'event-custom-complex',
      ),
      'name' => 'event-custom',
      'type' => 'js',
      'path' => 'event-custom/event-custom-min.js',
      'supersedes' => 
      array (
        0 => 'event-custom-base',
        1 => 'event-custom-complex',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'event-custom-base' => 
    array (
      'requires' => 
      array (
        0 => 'oop',
      ),
      'name' => 'event-custom-base',
      'type' => 'js',
      'path' => 'event-custom-base/event-custom-base-min.js',
      'ext' => false,
    ),
    'event-custom-complex' => 
    array (
      'requires' => 
      array (
        0 => 'event-custom-base',
      ),
      'name' => 'event-custom-complex',
      'type' => 'js',
      'path' => 'event-custom-complex/event-custom-complex-min.js',
      'ext' => false,
    ),
    'event-delegate' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
      ),
      'name' => 'event-delegate',
      'type' => 'js',
      'path' => 'event-delegate/event-delegate-min.js',
      'ext' => false,
    ),
    'event-flick' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'event-touch',
        2 => 'event-synthetic',
      ),
      'name' => 'event-flick',
      'type' => 'js',
      'path' => 'event-flick/event-flick-min.js',
      'ext' => false,
    ),
    'event-focus' => 
    array (
      'requires' => 
      array (
        0 => 'event-synthetic',
      ),
      'name' => 'event-focus',
      'type' => 'js',
      'path' => 'event-focus/event-focus-min.js',
      'ext' => false,
    ),
    'event-gestures' => 
    array (
      'use' => 
      array (
        0 => 'event-flick',
        1 => 'event-move',
      ),
      'name' => 'event-gestures',
      'type' => 'js',
      'path' => 'event-gestures/event-gestures-min.js',
      'supersedes' => 
      array (
        0 => 'event-flick',
        1 => 'event-move',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'event-hover' => 
    array (
      'requires' => 
      array (
        0 => 'event-mouseenter',
      ),
      'name' => 'event-hover',
      'type' => 'js',
      'path' => 'event-hover/event-hover-min.js',
      'ext' => false,
    ),
    'event-key' => 
    array (
      'requires' => 
      array (
        0 => 'event-synthetic',
      ),
      'name' => 'event-key',
      'type' => 'js',
      'path' => 'event-key/event-key-min.js',
      'ext' => false,
    ),
    'event-mouseenter' => 
    array (
      'requires' => 
      array (
        0 => 'event-synthetic',
      ),
      'name' => 'event-mouseenter',
      'type' => 'js',
      'path' => 'event-mouseenter/event-mouseenter-min.js',
      'ext' => false,
    ),
    'event-mousewheel' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
      ),
      'name' => 'event-mousewheel',
      'type' => 'js',
      'path' => 'event-mousewheel/event-mousewheel-min.js',
      'ext' => false,
    ),
    'event-move' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'event-touch',
        2 => 'event-synthetic',
      ),
      'name' => 'event-move',
      'type' => 'js',
      'path' => 'event-move/event-move-min.js',
      'ext' => false,
    ),
    'event-outside' => 
    array (
      'requires' => 
      array (
        0 => 'event-synthetic',
      ),
      'name' => 'event-outside',
      'type' => 'js',
      'path' => 'event-outside/event-outside-min.js',
      'ext' => false,
    ),
    'event-resize' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'event-synthetic',
      ),
      'name' => 'event-resize',
      'type' => 'js',
      'path' => 'event-resize/event-resize-min.js',
      'ext' => false,
    ),
    'event-simulate' => 
    array (
      'requires' => 
      array (
        0 => 'event-base',
      ),
      'name' => 'event-simulate',
      'type' => 'js',
      'path' => 'event-simulate/event-simulate-min.js',
      'ext' => false,
    ),
    'event-synthetic' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'event-custom-complex',
      ),
      'name' => 'event-synthetic',
      'type' => 'js',
      'path' => 'event-synthetic/event-synthetic-min.js',
      'ext' => false,
    ),
    'event-touch' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
      ),
      'name' => 'event-touch',
      'type' => 'js',
      'path' => 'event-touch/event-touch-min.js',
      'ext' => false,
    ),
    'event-valuechange' => 
    array (
      'requires' => 
      array (
        0 => 'event-focus',
        1 => 'event-synthetic',
      ),
      'name' => 'event-valuechange',
      'type' => 'js',
      'path' => 'event-valuechange/event-valuechange-min.js',
      'ext' => false,
    ),
    'exec-command' => 
    array (
      'requires' => 
      array (
        0 => 'frame',
      ),
      'name' => 'exec-command',
      'type' => 'js',
      'path' => 'exec-command/exec-command-min.js',
      'ext' => false,
    ),
    'features' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'features',
      'type' => 'js',
      'path' => 'features/features-min.js',
      'ext' => false,
      '_inspected' => true,
    ),
    'frame' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'base-pluginhost',
        2 => 'base-build',
        3 => 'node',
        4 => 'selector-css3',
        5 => 'substitute',
        6 => 'yui-throttle',
      ),
      'name' => 'frame',
      'type' => 'js',
      'path' => 'frame/frame-min.js',
      'ext' => false,
    ),
    'get' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'get',
      'type' => 'js',
      'path' => 'get/get-min.js',
      'ext' => false,
      '_inspected' => true,
    ),
    'graphics' => 
    array (
      'requires' => 
      array (
        0 => 'node',
        1 => 'event-custom-base',
        2 => 'event-custom-complex',
        3 => 'pluginhost',
      ),
      'name' => 'graphics',
      'type' => 'js',
      'path' => 'graphics/graphics-min.js',
      'ext' => false,
    ),
    'graphics-canvas' => 
    array (
      'condition' => 
      array (
        'name' => 'graphics-canvas',
        'trigger' => 'graphics',
      ),
      'requires' => 
      array (
        0 => 'graphics',
      ),
      'name' => 'graphics-canvas',
      'type' => 'js',
      'path' => 'graphics-canvas/graphics-canvas-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'graphics',
      ),
      'after_map' => 
      array (
        'graphics' => true,
      ),
    ),
    'graphics-canvas-default' => 
    array (
      'condition' => 
      array (
        'name' => 'graphics-canvas-default',
        'trigger' => 'graphics',
      ),
      'name' => 'graphics-canvas-default',
      'type' => 'js',
      'path' => 'graphics-canvas-default/graphics-canvas-default-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
      'after' => 
      array (
        0 => 'graphics',
      ),
      'after_map' => 
      array (
        'graphics' => true,
      ),
    ),
    'graphics-svg' => 
    array (
      'condition' => 
      array (
        'name' => 'graphics-svg',
        'trigger' => 'graphics',
      ),
      'requires' => 
      array (
        0 => 'graphics',
      ),
      'name' => 'graphics-svg',
      'type' => 'js',
      'path' => 'graphics-svg/graphics-svg-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'graphics',
      ),
      'after_map' => 
      array (
        'graphics' => true,
      ),
    ),
    'graphics-svg-default' => 
    array (
      'condition' => 
      array (
        'name' => 'graphics-svg-default',
        'trigger' => 'graphics',
      ),
      'name' => 'graphics-svg-default',
      'type' => 'js',
      'path' => 'graphics-svg-default/graphics-svg-default-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
      'after' => 
      array (
        0 => 'graphics',
      ),
      'after_map' => 
      array (
        'graphics' => true,
      ),
    ),
    'graphics-vml' => 
    array (
      'condition' => 
      array (
        'name' => 'graphics-vml',
        'trigger' => 'graphics',
      ),
      'requires' => 
      array (
        0 => 'graphics',
      ),
      'name' => 'graphics-vml',
      'type' => 'js',
      'path' => 'graphics-vml/graphics-vml-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'graphics',
      ),
      'after_map' => 
      array (
        'graphics' => true,
      ),
    ),
    'graphics-vml-default' => 
    array (
      'condition' => 
      array (
        'name' => 'graphics-vml-default',
        'trigger' => 'graphics',
      ),
      'name' => 'graphics-vml-default',
      'type' => 'js',
      'path' => 'graphics-vml-default/graphics-vml-default-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
      'after' => 
      array (
        0 => 'graphics',
      ),
      'after_map' => 
      array (
        'graphics' => true,
      ),
    ),
    'highlight' => 
    array (
      'use' => 
      array (
        0 => 'highlight-base',
        1 => 'highlight-accentfold',
      ),
      'name' => 'highlight',
      'type' => 'js',
      'path' => 'highlight/highlight-min.js',
      'supersedes' => 
      array (
        0 => 'highlight-base',
        1 => 'highlight-accentfold',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'highlight-accentfold' => 
    array (
      'requires' => 
      array (
        0 => 'highlight-base',
        1 => 'text-accentfold',
      ),
      'name' => 'highlight-accentfold',
      'type' => 'js',
      'path' => 'highlight-accentfold/highlight-accentfold-min.js',
      'ext' => false,
    ),
    'highlight-base' => 
    array (
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'classnamemanager',
        2 => 'escape',
        3 => 'text-wordbreak',
      ),
      'name' => 'highlight-base',
      'type' => 'js',
      'path' => 'highlight-base/highlight-base-min.js',
      'ext' => false,
    ),
    'history' => 
    array (
      'use' => 
      array (
        0 => 'history-base',
        1 => 'history-hash',
        2 => 'history-hash-ie',
        3 => 'history-html5',
      ),
      'name' => 'history',
      'type' => 'js',
      'path' => 'history/history-min.js',
      'supersedes' => 
      array (
        0 => 'history-base',
        1 => 'history-hash',
        2 => 'history-hash-ie',
        3 => 'history-html5',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'history-base' => 
    array (
      'requires' => 
      array (
        0 => 'event-custom-complex',
      ),
      'name' => 'history-base',
      'type' => 'js',
      'path' => 'history-base/history-base-min.js',
      'ext' => false,
    ),
    'history-hash' => 
    array (
      'after' => 
      array (
        0 => 'history-html5',
      ),
      'requires' => 
      array (
        0 => 'event-synthetic',
        1 => 'history-base',
        2 => 'yui-later',
      ),
      'name' => 'history-hash',
      'type' => 'js',
      'path' => 'history-hash/history-hash-min.js',
      'ext' => false,
      'after_map' => 
      array (
        'history-html5' => true,
      ),
    ),
    'history-hash-ie' => 
    array (
      'condition' => 
      array (
        'name' => 'history-hash-ie',
        'trigger' => 'history-hash',
      ),
      'requires' => 
      array (
        0 => 'history-hash',
        1 => 'node-base',
      ),
      'name' => 'history-hash-ie',
      'type' => 'js',
      'path' => 'history-hash-ie/history-hash-ie-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'history-hash',
      ),
      'after_map' => 
      array (
        'history-hash' => true,
      ),
    ),
    'history-html5' => 
    array (
      'optional' => 
      array (
        0 => 'json',
      ),
      'requires' => 
      array (
        0 => 'event-base',
        1 => 'history-base',
        2 => 'node-base',
      ),
      'name' => 'history-html5',
      'type' => 'js',
      'path' => 'history-html5/history-html5-min.js',
      'ext' => false,
    ),
    'imageloader' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'node-style',
        2 => 'node-screen',
      ),
      'name' => 'imageloader',
      'type' => 'js',
      'path' => 'imageloader/imageloader-min.js',
      'ext' => false,
    ),
    'intl' => 
    array (
      'requires' => 
      array (
        0 => 'intl-base',
        1 => 'event-custom-base',
        2 => 'event-custom-complex',
      ),
      'name' => 'intl',
      'type' => 'js',
      'path' => 'intl/intl-min.js',
      'ext' => false,
    ),
    'intl-base' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'intl-base',
      'type' => 'js',
      'path' => 'intl-base/intl-base-min.js',
      'ext' => false,
      '_inspected' => true,
    ),
    'io' => 
    array (
      'use' => 
      array (
        0 => 'io-base',
        1 => 'io-xdr',
        2 => 'io-form',
        3 => 'io-upload-iframe',
        4 => 'io-queue',
      ),
      'name' => 'io',
      'type' => 'js',
      'path' => 'io/io-min.js',
      'supersedes' => 
      array (
        0 => 'io-base',
        1 => 'io-xdr',
        2 => 'io-form',
        3 => 'io-upload-iframe',
        4 => 'io-queue',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'io-base' => 
    array (
      'requires' => 
      array (
        0 => 'event-custom-base',
        1 => 'querystring-stringify-simple',
      ),
      'name' => 'io-base',
      'type' => 'js',
      'path' => 'io-base/io-base-min.js',
      'ext' => false,
    ),
    'io-form' => 
    array (
      'requires' => 
      array (
        0 => 'io-base',
        1 => 'node-base',
      ),
      'name' => 'io-form',
      'type' => 'js',
      'path' => 'io-form/io-form-min.js',
      'ext' => false,
    ),
    'io-queue' => 
    array (
      'requires' => 
      array (
        0 => 'io-base',
        1 => 'queue-promote',
      ),
      'name' => 'io-queue',
      'type' => 'js',
      'path' => 'io-queue/io-queue-min.js',
      'ext' => false,
    ),
    'io-upload-iframe' => 
    array (
      'requires' => 
      array (
        0 => 'io-base',
        1 => 'node-base',
      ),
      'name' => 'io-upload-iframe',
      'type' => 'js',
      'path' => 'io-upload-iframe/io-upload-iframe-min.js',
      'ext' => false,
    ),
    'io-xdr' => 
    array (
      'requires' => 
      array (
        0 => 'io-base',
        1 => 'datatype-xml-parse',
      ),
      'name' => 'io-xdr',
      'type' => 'js',
      'path' => 'io-xdr/io-xdr-min.js',
      'ext' => false,
    ),
    'json' => 
    array (
      'use' => 
      array (
        0 => 'json-parse',
        1 => 'json-stringify',
      ),
      'name' => 'json',
      'type' => 'js',
      'path' => 'json/json-min.js',
      'supersedes' => 
      array (
        0 => 'json-parse',
        1 => 'json-stringify',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'json-parse' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'json-parse',
      'type' => 'js',
      'path' => 'json-parse/json-parse-min.js',
      'ext' => false,
    ),
    'json-stringify' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'json-stringify',
      'type' => 'js',
      'path' => 'json-stringify/json-stringify-min.js',
      'ext' => false,
    ),
    'jsonp' => 
    array (
      'requires' => 
      array (
        0 => 'get',
        1 => 'oop',
      ),
      'name' => 'jsonp',
      'type' => 'js',
      'path' => 'jsonp/jsonp-min.js',
      'ext' => false,
    ),
    'jsonp-url' => 
    array (
      'requires' => 
      array (
        0 => 'jsonp',
      ),
      'name' => 'jsonp-url',
      'type' => 'js',
      'path' => 'jsonp-url/jsonp-url-min.js',
      'ext' => false,
    ),
    'loader' => 
    array (
      'use' => 
      array (
        0 => 'loader-base',
        1 => 'loader-rollup',
        2 => 'loader-yui3',
      ),
      'name' => 'loader',
      'type' => 'js',
      'path' => 'loader/loader-min.js',
      'supersedes' => 
      array (
        0 => 'loader-base',
        1 => 'loader-rollup',
        2 => 'loader-yui3',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'loader-base' => 
    array (
      'requires' => 
      array (
        0 => 'get',
      ),
      'name' => 'loader-base',
      'type' => 'js',
      'path' => 'loader-base/loader-base-min.js',
      'ext' => false,
      '_inspected' => true,
    ),
    'loader-rollup' => 
    array (
      'requires' => 
      array (
        0 => 'loader-base',
      ),
      'name' => 'loader-rollup',
      'type' => 'js',
      'path' => 'loader-rollup/loader-rollup-min.js',
      'ext' => false,
      '_inspected' => true,
    ),
    'loader-yui3' => 
    array (
      'requires' => 
      array (
        0 => 'loader-base',
      ),
      'name' => 'loader-yui3',
      'type' => 'js',
      'path' => 'loader-yui3/loader-yui3-min.js',
      'ext' => false,
      '_inspected' => true,
    ),
    'model' => 
    array (
      'requires' => 
      array (
        0 => 'base-build',
        1 => 'escape',
        2 => 'json-parse',
      ),
      'name' => 'model',
      'type' => 'js',
      'path' => 'model/model-min.js',
      'ext' => false,
    ),
    'model-list' => 
    array (
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'array-invoke',
        2 => 'arraylist',
        3 => 'base-build',
        4 => 'escape',
        5 => 'json-parse',
        6 => 'model',
      ),
      'name' => 'model-list',
      'type' => 'js',
      'path' => 'model-list/model-list-min.js',
      'ext' => false,
    ),
    'node' => 
    array (
      'use' => 
      array (
        0 => 'node-base',
        1 => 'node-event-delegate',
        2 => 'node-pluginhost',
        3 => 'node-screen',
        4 => 'node-style',
      ),
      'name' => 'node',
      'type' => 'js',
      'path' => 'node/node-min.js',
      'supersedes' => 
      array (
        0 => 'node-base',
        1 => 'node-event-delegate',
        2 => 'node-pluginhost',
        3 => 'node-screen',
        4 => 'node-style',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'node-base' => 
    array (
      'requires' => 
      array (
        0 => 'event-base',
        1 => 'node-core',
        2 => 'dom-base',
      ),
      'name' => 'node-base',
      'type' => 'js',
      'path' => 'node-base/node-base-min.js',
      'ext' => false,
    ),
    'node-core' => 
    array (
      'requires' => 
      array (
        0 => 'dom-core',
        1 => 'selector',
      ),
      'name' => 'node-core',
      'type' => 'js',
      'path' => 'node-core/node-core-min.js',
      'ext' => false,
    ),
    'node-deprecated' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
      ),
      'name' => 'node-deprecated',
      'type' => 'js',
      'path' => 'node-deprecated/node-deprecated-min.js',
      'ext' => false,
    ),
    'node-event-delegate' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'event-delegate',
      ),
      'name' => 'node-event-delegate',
      'type' => 'js',
      'path' => 'node-event-delegate/node-event-delegate-min.js',
      'ext' => false,
    ),
    'node-event-html5' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
      ),
      'name' => 'node-event-html5',
      'type' => 'js',
      'path' => 'node-event-html5/node-event-html5-min.js',
      'ext' => false,
    ),
    'node-event-simulate' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'event-simulate',
      ),
      'name' => 'node-event-simulate',
      'type' => 'js',
      'path' => 'node-event-simulate/node-event-simulate-min.js',
      'ext' => false,
    ),
    'node-flick' => 
    array (
      'requires' => 
      array (
        0 => 'classnamemanager',
        1 => 'transition',
        2 => 'event-flick',
        3 => 'plugin',
      ),
      'skinnable' => true,
      'name' => 'node-flick',
      'type' => 'js',
      'path' => 'node-flick/node-flick-min.js',
      'ext' => false,
    ),
    'node-focusmanager' => 
    array (
      'requires' => 
      array (
        0 => 'attribute-base',
        1 => 'attribute-complex',
        2 => 'node-base',
        3 => 'node-event-delegate',
        4 => 'node-pluginhost',
        5 => 'node-screen',
        6 => 'node-style',
        7 => 'plugin',
        8 => 'node-event-simulate',
        9 => 'event-key',
        10 => 'event-focus',
      ),
      'name' => 'node-focusmanager',
      'type' => 'js',
      'path' => 'node-focusmanager/node-focusmanager-min.js',
      'ext' => false,
    ),
    'node-load' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'io-base',
      ),
      'name' => 'node-load',
      'type' => 'js',
      'path' => 'node-load/node-load-min.js',
      'ext' => false,
    ),
    'node-menunav' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'node-event-delegate',
        2 => 'node-pluginhost',
        3 => 'node-screen',
        4 => 'node-style',
        5 => 'classnamemanager',
        6 => 'plugin',
        7 => 'node-focusmanager',
      ),
      'skinnable' => true,
      'name' => 'node-menunav',
      'type' => 'js',
      'path' => 'node-menunav/node-menunav-min.js',
      'ext' => false,
    ),
    'node-pluginhost' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'pluginhost',
      ),
      'name' => 'node-pluginhost',
      'type' => 'js',
      'path' => 'node-pluginhost/node-pluginhost-min.js',
      'ext' => false,
    ),
    'node-screen' => 
    array (
      'requires' => 
      array (
        0 => 'dom-screen',
        1 => 'node-base',
      ),
      'name' => 'node-screen',
      'type' => 'js',
      'path' => 'node-screen/node-screen-min.js',
      'ext' => false,
    ),
    'node-style' => 
    array (
      'requires' => 
      array (
        0 => 'dom-style',
        1 => 'node-base',
      ),
      'name' => 'node-style',
      'type' => 'js',
      'path' => 'node-style/node-style-min.js',
      'ext' => false,
    ),
    'oop' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'oop',
      'type' => 'js',
      'path' => 'oop/oop-min.js',
      'ext' => false,
    ),
    'overlay' => 
    array (
      'requires' => 
      array (
        0 => 'widget',
        1 => 'widget-stdmod',
        2 => 'widget-position',
        3 => 'widget-position-align',
        4 => 'widget-stack',
        5 => 'widget-position-constrain',
      ),
      'skinnable' => true,
      'name' => 'overlay',
      'type' => 'js',
      'path' => 'overlay/overlay-min.js',
      'ext' => false,
    ),
    'panel' => 
    array (
      'requires' => 
      array (
        0 => 'widget',
        1 => 'widget-stdmod',
        2 => 'widget-position',
        3 => 'widget-position-align',
        4 => 'widget-stack',
        5 => 'widget-position-constrain',
        6 => 'widget-modality',
        7 => 'widget-autohide',
        8 => 'widget-buttons',
      ),
      'skinnable' => true,
      'name' => 'panel',
      'type' => 'js',
      'path' => 'panel/panel-min.js',
      'ext' => false,
    ),
    'plugin' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
      ),
      'name' => 'plugin',
      'type' => 'js',
      'path' => 'plugin/plugin-min.js',
      'ext' => false,
    ),
    'pluginhost' => 
    array (
      'use' => 
      array (
        0 => 'pluginhost-base',
        1 => 'pluginhost-config',
      ),
      'name' => 'pluginhost',
      'type' => 'js',
      'path' => 'pluginhost/pluginhost-min.js',
      'supersedes' => 
      array (
        0 => 'pluginhost-base',
        1 => 'pluginhost-config',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'pluginhost-base' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'pluginhost-base',
      'type' => 'js',
      'path' => 'pluginhost-base/pluginhost-base-min.js',
      'ext' => false,
    ),
    'pluginhost-config' => 
    array (
      'requires' => 
      array (
        0 => 'pluginhost-base',
      ),
      'name' => 'pluginhost-config',
      'type' => 'js',
      'path' => 'pluginhost-config/pluginhost-config-min.js',
      'ext' => false,
    ),
    'profiler' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'profiler',
      'type' => 'js',
      'path' => 'profiler/profiler-min.js',
      'ext' => false,
    ),
    'querystring' => 
    array (
      'use' => 
      array (
        0 => 'querystring-parse',
        1 => 'querystring-stringify',
      ),
      'name' => 'querystring',
      'type' => 'js',
      'path' => 'querystring/querystring-min.js',
      'supersedes' => 
      array (
        0 => 'querystring-parse',
        1 => 'querystring-stringify',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'querystring-parse' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
        1 => 'array-extras',
      ),
      'name' => 'querystring-parse',
      'type' => 'js',
      'path' => 'querystring-parse/querystring-parse-min.js',
      'ext' => false,
    ),
    'querystring-parse-simple' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'querystring-parse-simple',
      'type' => 'js',
      'path' => 'querystring-parse-simple/querystring-parse-simple-min.js',
      'ext' => false,
    ),
    'querystring-stringify' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'querystring-stringify',
      'type' => 'js',
      'path' => 'querystring-stringify/querystring-stringify-min.js',
      'ext' => false,
    ),
    'querystring-stringify-simple' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'querystring-stringify-simple',
      'type' => 'js',
      'path' => 'querystring-stringify-simple/querystring-stringify-simple-min.js',
      'ext' => false,
    ),
    'queue-promote' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'queue-promote',
      'type' => 'js',
      'path' => 'queue-promote/queue-promote-min.js',
      'ext' => false,
    ),
    'range-slider' => 
    array (
      'requires' => 
      array (
        0 => 'slider-base',
        1 => 'slider-value-range',
        2 => 'clickable-rail',
      ),
      'name' => 'range-slider',
      'type' => 'js',
      'path' => 'range-slider/range-slider-min.js',
      'ext' => false,
    ),
    'recordset' => 
    array (
      'use' => 
      array (
        0 => 'recordset-base',
        1 => 'recordset-sort',
        2 => 'recordset-filter',
        3 => 'recordset-indexer',
      ),
      'name' => 'recordset',
      'type' => 'js',
      'path' => 'recordset/recordset-min.js',
      'supersedes' => 
      array (
        0 => 'recordset-base',
        1 => 'recordset-sort',
        2 => 'recordset-filter',
        3 => 'recordset-indexer',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'recordset-base' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'base-pluginhost',
        2 => 'base-build',
        3 => 'arraylist',
      ),
      'name' => 'recordset-base',
      'type' => 'js',
      'path' => 'recordset-base/recordset-base-min.js',
      'ext' => false,
    ),
    'recordset-filter' => 
    array (
      'requires' => 
      array (
        0 => 'recordset-base',
        1 => 'array-extras',
        2 => 'plugin',
      ),
      'name' => 'recordset-filter',
      'type' => 'js',
      'path' => 'recordset-filter/recordset-filter-min.js',
      'ext' => false,
    ),
    'recordset-indexer' => 
    array (
      'requires' => 
      array (
        0 => 'recordset-base',
        1 => 'plugin',
      ),
      'name' => 'recordset-indexer',
      'type' => 'js',
      'path' => 'recordset-indexer/recordset-indexer-min.js',
      'ext' => false,
    ),
    'recordset-sort' => 
    array (
      'requires' => 
      array (
        0 => 'arraysort',
        1 => 'recordset-base',
        2 => 'plugin',
      ),
      'name' => 'recordset-sort',
      'type' => 'js',
      'path' => 'recordset-sort/recordset-sort-min.js',
      'ext' => false,
    ),
    'resize' => 
    array (
      'use' => 
      array (
        0 => 'resize-base',
        1 => 'resize-proxy',
        2 => 'resize-constrain',
      ),
      'name' => 'resize',
      'type' => 'js',
      'path' => 'resize/resize-min.js',
      'supersedes' => 
      array (
        0 => 'resize-base',
        1 => 'resize-proxy',
        2 => 'resize-constrain',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'resize-base' => 
    array (
      'requires' => 
      array (
        0 => 'base-base',
        1 => 'base-pluginhost',
        2 => 'base-build',
        3 => 'widget',
        4 => 'substitute',
        5 => 'event-base',
        6 => 'event-delegate',
        7 => 'event-synthetic',
        8 => 'event-mousewheel',
        9 => 'event-mouseenter',
        10 => 'event-key',
        11 => 'event-focus',
        12 => 'event-resize',
        13 => 'event-hover',
        14 => 'event-outside',
        15 => 'oop',
        16 => 'dd-drag',
        17 => 'dd-delegate',
        18 => 'dd-drop',
      ),
      'skinnable' => true,
      'name' => 'resize-base',
      'type' => 'js',
      'path' => 'resize-base/resize-base-min.js',
      'ext' => false,
    ),
    'resize-constrain' => 
    array (
      'requires' => 
      array (
        0 => 'plugin',
        1 => 'resize-base',
      ),
      'name' => 'resize-constrain',
      'type' => 'js',
      'path' => 'resize-constrain/resize-constrain-min.js',
      'ext' => false,
    ),
    'resize-plugin' => 
    array (
      'optional' => 
      array (
        0 => 'resize-constrain',
      ),
      'requires' => 
      array (
        0 => 'resize-base',
        1 => 'plugin',
      ),
      'name' => 'resize-plugin',
      'type' => 'js',
      'path' => 'resize-plugin/resize-plugin-min.js',
      'ext' => false,
    ),
    'resize-proxy' => 
    array (
      'requires' => 
      array (
        0 => 'plugin',
        1 => 'resize-base',
      ),
      'name' => 'resize-proxy',
      'type' => 'js',
      'path' => 'resize-proxy/resize-proxy-min.js',
      'ext' => false,
    ),
    'rls' => 
    array (
      'requires' => 
      array (
        0 => 'get',
        1 => 'features',
      ),
      'name' => 'rls',
      'type' => 'js',
      'path' => 'rls/rls-min.js',
      'ext' => false,
    ),
    'scrollview' => 
    array (
      'requires' => 
      array (
        0 => 'scrollview-base',
        1 => 'scrollview-scrollbars',
      ),
      'name' => 'scrollview',
      'type' => 'js',
      'path' => 'scrollview/scrollview-min.js',
      'ext' => false,
    ),
    'scrollview-base' => 
    array (
      'requires' => 
      array (
        0 => 'widget',
        1 => 'event-flick',
        2 => 'event-move',
        3 => 'transition',
      ),
      'skinnable' => true,
      'name' => 'scrollview-base',
      'type' => 'js',
      'path' => 'scrollview-base/scrollview-base-min.js',
      'ext' => false,
    ),
    'scrollview-base-ie' => 
    array (
      'condition' => 
      array (
        'name' => 'scrollview-base-ie',
        'trigger' => 'scrollview-base',
        'ua' => 'ie',
      ),
      'requires' => 
      array (
        0 => 'scrollview-base',
      ),
      'name' => 'scrollview-base-ie',
      'type' => 'js',
      'path' => 'scrollview-base-ie/scrollview-base-ie-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'scrollview-base',
      ),
      'after_map' => 
      array (
        'scrollview-base' => true,
      ),
    ),
    'scrollview-list' => 
    array (
      'requires' => 
      array (
        0 => 'plugin',
        1 => 'classnamemanager',
      ),
      'skinnable' => true,
      'name' => 'scrollview-list',
      'type' => 'js',
      'path' => 'scrollview-list/scrollview-list-min.js',
      'ext' => false,
    ),
    'scrollview-paginator' => 
    array (
      'requires' => 
      array (
        0 => 'plugin',
      ),
      'name' => 'scrollview-paginator',
      'type' => 'js',
      'path' => 'scrollview-paginator/scrollview-paginator-min.js',
      'ext' => false,
    ),
    'scrollview-scrollbars' => 
    array (
      'requires' => 
      array (
        0 => 'classnamemanager',
        1 => 'transition',
        2 => 'plugin',
      ),
      'skinnable' => true,
      'name' => 'scrollview-scrollbars',
      'type' => 'js',
      'path' => 'scrollview-scrollbars/scrollview-scrollbars-min.js',
      'ext' => false,
    ),
    'selection' => 
    array (
      'requires' => 
      array (
        0 => 'node-base',
        1 => 'node-event-delegate',
        2 => 'node-pluginhost',
        3 => 'node-screen',
        4 => 'node-style',
      ),
      'name' => 'selection',
      'type' => 'js',
      'path' => 'selection/selection-min.js',
      'ext' => false,
    ),
    'selector' => 
    array (
      'requires' => 
      array (
        0 => 'selector-native',
      ),
      'name' => 'selector',
      'type' => 'js',
      'path' => 'selector/selector-min.js',
      'ext' => false,
    ),
    'selector-css2' => 
    array (
      'condition' => 
      array (
        'name' => 'selector-css2',
        'trigger' => 'selector',
      ),
      'requires' => 
      array (
        0 => 'selector-native',
      ),
      'name' => 'selector-css2',
      'type' => 'js',
      'path' => 'selector-css2/selector-css2-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'selector',
      ),
      'after_map' => 
      array (
        'selector' => true,
      ),
    ),
    'selector-css3' => 
    array (
      'requires' => 
      array (
        0 => 'selector-native',
        1 => 'selector-css2',
      ),
      'name' => 'selector-css3',
      'type' => 'js',
      'path' => 'selector-css3/selector-css3-min.js',
      'ext' => false,
    ),
    'selector-native' => 
    array (
      'requires' => 
      array (
        0 => 'dom-base',
      ),
      'name' => 'selector-native',
      'type' => 'js',
      'path' => 'selector-native/selector-native-min.js',
      'ext' => false,
    ),
    'shim-plugin' => 
    array (
      'requires' => 
      array (
        0 => 'node-style',
        1 => 'node-pluginhost',
      ),
      'name' => 'shim-plugin',
      'type' => 'js',
      'path' => 'shim-plugin/shim-plugin-min.js',
      'ext' => false,
    ),
    'slider' => 
    array (
      'use' => 
      array (
        0 => 'slider-base',
        1 => 'slider-value-range',
        2 => 'clickable-rail',
        3 => 'range-slider',
      ),
      'name' => 'slider',
      'type' => 'js',
      'path' => 'slider/slider-min.js',
      'supersedes' => 
      array (
        0 => 'slider-base',
        1 => 'slider-value-range',
        2 => 'clickable-rail',
        3 => 'range-slider',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'slider-base' => 
    array (
      'requires' => 
      array (
        0 => 'widget',
        1 => 'dd-constrain',
        2 => 'substitute',
      ),
      'skinnable' => true,
      'name' => 'slider-base',
      'type' => 'js',
      'path' => 'slider-base/slider-base-min.js',
      'ext' => false,
    ),
    'slider-value-range' => 
    array (
      'requires' => 
      array (
        0 => 'slider-base',
      ),
      'name' => 'slider-value-range',
      'type' => 'js',
      'path' => 'slider-value-range/slider-value-range-min.js',
      'ext' => false,
    ),
    'sortable' => 
    array (
      'requires' => 
      array (
        0 => 'dd-delegate',
        1 => 'dd-drop-plugin',
        2 => 'dd-proxy',
      ),
      'name' => 'sortable',
      'type' => 'js',
      'path' => 'sortable/sortable-min.js',
      'ext' => false,
    ),
    'sortable-scroll' => 
    array (
      'requires' => 
      array (
        0 => 'dd-scroll',
        1 => 'sortable',
      ),
      'name' => 'sortable-scroll',
      'type' => 'js',
      'path' => 'sortable-scroll/sortable-scroll-min.js',
      'ext' => false,
    ),
    'stylesheet' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'stylesheet',
      'type' => 'js',
      'path' => 'stylesheet/stylesheet-min.js',
      'ext' => false,
    ),
    'substitute' => 
    array (
      'optional' => 
      array (
        0 => 'dump',
      ),
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'substitute',
      'type' => 'js',
      'path' => 'substitute/substitute-min.js',
      'ext' => false,
    ),
    'swf' => 
    array (
      'requires' => 
      array (
        0 => 'event-custom-base',
        1 => 'event-custom-complex',
        2 => 'node-base',
        3 => 'node-event-delegate',
        4 => 'node-pluginhost',
        5 => 'node-screen',
        6 => 'node-style',
        7 => 'swfdetect',
        8 => 'escape',
      ),
      'name' => 'swf',
      'type' => 'js',
      'path' => 'swf/swf-min.js',
      'ext' => false,
    ),
    'swfdetect' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'swfdetect',
      'type' => 'js',
      'path' => 'swfdetect/swfdetect-min.js',
      'ext' => false,
    ),
    'tabview' => 
    array (
      'requires' => 
      array (
        0 => 'widget',
        1 => 'widget-parent',
        2 => 'widget-child',
        3 => 'tabview-base',
        4 => 'node-pluginhost',
        5 => 'node-focusmanager',
      ),
      'skinnable' => true,
      'name' => 'tabview',
      'type' => 'js',
      'path' => 'tabview/tabview-min.js',
      'ext' => false,
    ),
    'tabview-base' => 
    array (
      'requires' => 
      array (
        0 => 'node-event-delegate',
        1 => 'classnamemanager',
        2 => 'skin-sam-tabview',
      ),
      'name' => 'tabview-base',
      'type' => 'js',
      'path' => 'tabview-base/tabview-base-min.js',
      'ext' => false,
    ),
    'tabview-plugin' => 
    array (
      'requires' => 
      array (
        0 => 'tabview-base',
      ),
      'name' => 'tabview-plugin',
      'type' => 'js',
      'path' => 'tabview-plugin/tabview-plugin-min.js',
      'ext' => false,
    ),
    'test' => 
    array (
      'requires' => 
      array (
        0 => 'event-simulate',
        1 => 'event-custom-base',
        2 => 'event-custom-complex',
        3 => 'substitute',
        4 => 'json-stringify',
      ),
      'skinnable' => true,
      'name' => 'test',
      'type' => 'js',
      'path' => 'test/test-min.js',
      'ext' => false,
    ),
    'text' => 
    array (
      'use' => 
      array (
        0 => 'text-accentfold',
        1 => 'text-wordbreak',
      ),
      'name' => 'text',
      'type' => 'js',
      'path' => 'text/text-min.js',
      'supersedes' => 
      array (
        0 => 'text-accentfold',
        1 => 'text-wordbreak',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'text-accentfold' => 
    array (
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'text-data-accentfold',
      ),
      'name' => 'text-accentfold',
      'type' => 'js',
      'path' => 'text-accentfold/text-accentfold-min.js',
      'ext' => false,
    ),
    'text-data-accentfold' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'text-data-accentfold',
      'type' => 'js',
      'path' => 'text-data-accentfold/text-data-accentfold-min.js',
      'ext' => false,
    ),
    'text-data-wordbreak' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'text-data-wordbreak',
      'type' => 'js',
      'path' => 'text-data-wordbreak/text-data-wordbreak-min.js',
      'ext' => false,
    ),
    'text-wordbreak' => 
    array (
      'requires' => 
      array (
        0 => 'array-extras',
        1 => 'text-data-wordbreak',
      ),
      'name' => 'text-wordbreak',
      'type' => 'js',
      'path' => 'text-wordbreak/text-wordbreak-min.js',
      'ext' => false,
    ),
    'transition' => 
    array (
      'requires' => 
      array (
        0 => 'node-style',
      ),
      'name' => 'transition',
      'type' => 'js',
      'path' => 'transition/transition-min.js',
      'ext' => false,
    ),
    'transition-timer' => 
    array (
      'condition' => 
      array (
        'name' => 'transition-timer',
        'trigger' => 'transition',
      ),
      'requires' => 
      array (
        0 => 'transition',
      ),
      'name' => 'transition-timer',
      'type' => 'js',
      'path' => 'transition-timer/transition-timer-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'transition',
      ),
      'after_map' => 
      array (
        'transition' => true,
      ),
    ),
    'uploader' => 
    array (
      'requires' => 
      array (
        0 => 'event-custom-base',
        1 => 'event-custom-complex',
        2 => 'node-base',
        3 => 'node-event-delegate',
        4 => 'node-pluginhost',
        5 => 'node-screen',
        6 => 'node-style',
        7 => 'base-base',
        8 => 'base-pluginhost',
        9 => 'base-build',
        10 => 'swf',
      ),
      'name' => 'uploader',
      'type' => 'js',
      'path' => 'uploader/uploader-min.js',
      'ext' => false,
    ),
    'view' => 
    array (
      'requires' => 
      array (
        0 => 'base-build',
        1 => 'node-event-delegate',
      ),
      'name' => 'view',
      'type' => 'js',
      'path' => 'view/view-min.js',
      'ext' => false,
    ),
    'widget' => 
    array (
      'use' => 
      array (
        0 => 'widget-base',
        1 => 'widget-htmlparser',
        2 => 'widget-uievents',
        3 => 'widget-skin',
      ),
      'name' => 'widget',
      'type' => 'js',
      'path' => 'widget/widget-min.js',
      'supersedes' => 
      array (
        0 => 'widget-base',
        1 => 'widget-htmlparser',
        2 => 'widget-uievents',
        3 => 'widget-skin',
      ),
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'widget-anim' => 
    array (
      'requires' => 
      array (
        0 => 'plugin',
        1 => 'anim-base',
        2 => 'widget-base',
        3 => 'widget-htmlparser',
        4 => 'widget-uievents',
        5 => 'widget-skin',
      ),
      'name' => 'widget-anim',
      'type' => 'js',
      'path' => 'widget-anim/widget-anim-min.js',
      'ext' => false,
    ),
    'widget-autohide' => 
    array (
      'requires' => 
      array (
        0 => 'widget-base',
        1 => 'widget-htmlparser',
        2 => 'widget-uievents',
        3 => 'widget-skin',
        4 => 'event-outside',
        5 => 'base-build',
        6 => 'event-key',
      ),
      'skinnable' => false,
      'name' => 'widget-autohide',
      'type' => 'js',
      'path' => 'widget-autohide/widget-autohide-min.js',
      'ext' => false,
    ),
    'widget-base' => 
    array (
      'requires' => 
      array (
        0 => 'attribute-base',
        1 => 'attribute-complex',
        2 => 'event-focus',
        3 => 'base-base',
        4 => 'base-pluginhost',
        5 => 'node-base',
        6 => 'node-style',
        7 => 'classnamemanager',
      ),
      'skinnable' => true,
      'name' => 'widget-base',
      'type' => 'js',
      'path' => 'widget-base/widget-base-min.js',
      'ext' => false,
    ),
    'widget-base-ie' => 
    array (
      'condition' => 
      array (
        'name' => 'widget-base-ie',
        'trigger' => 'widget-base',
        'ua' => 'ie',
      ),
      'requires' => 
      array (
        0 => 'widget-base',
      ),
      'name' => 'widget-base-ie',
      'type' => 'js',
      'path' => 'widget-base-ie/widget-base-ie-min.js',
      'ext' => false,
      'after' => 
      array (
        0 => 'widget-base',
      ),
      'after_map' => 
      array (
        'widget-base' => true,
      ),
    ),
    'widget-buttons' => 
    array (
      'requires' => 
      array (
        0 => 'widget-base',
        1 => 'widget-htmlparser',
        2 => 'widget-uievents',
        3 => 'widget-skin',
        4 => 'base-build',
        5 => 'widget-stdmod',
      ),
      'skinnable' => true,
      'name' => 'widget-buttons',
      'type' => 'js',
      'path' => 'widget-buttons/widget-buttons-min.js',
      'ext' => false,
    ),
    'widget-child' => 
    array (
      'requires' => 
      array (
        0 => 'base-build',
        1 => 'widget-base',
        2 => 'widget-htmlparser',
        3 => 'widget-uievents',
        4 => 'widget-skin',
      ),
      'name' => 'widget-child',
      'type' => 'js',
      'path' => 'widget-child/widget-child-min.js',
      'ext' => false,
    ),
    'widget-htmlparser' => 
    array (
      'requires' => 
      array (
        0 => 'widget-base',
      ),
      'name' => 'widget-htmlparser',
      'type' => 'js',
      'path' => 'widget-htmlparser/widget-htmlparser-min.js',
      'ext' => false,
    ),
    'widget-locale' => 
    array (
      'requires' => 
      array (
        0 => 'widget-base',
      ),
      'name' => 'widget-locale',
      'type' => 'js',
      'path' => 'widget-locale/widget-locale-min.js',
      'ext' => false,
    ),
    'widget-modality' => 
    array (
      'requires' => 
      array (
        0 => 'widget-base',
        1 => 'widget-htmlparser',
        2 => 'widget-uievents',
        3 => 'widget-skin',
        4 => 'event-outside',
        5 => 'base-build',
      ),
      'skinnable' => false,
      'name' => 'widget-modality',
      'type' => 'js',
      'path' => 'widget-modality/widget-modality-min.js',
      'ext' => false,
    ),
    'widget-parent' => 
    array (
      'requires' => 
      array (
        0 => 'base-build',
        1 => 'arraylist',
        2 => 'widget-base',
        3 => 'widget-htmlparser',
        4 => 'widget-uievents',
        5 => 'widget-skin',
      ),
      'name' => 'widget-parent',
      'type' => 'js',
      'path' => 'widget-parent/widget-parent-min.js',
      'ext' => false,
    ),
    'widget-position' => 
    array (
      'requires' => 
      array (
        0 => 'base-build',
        1 => 'node-screen',
        2 => 'widget-base',
        3 => 'widget-htmlparser',
        4 => 'widget-uievents',
        5 => 'widget-skin',
      ),
      'name' => 'widget-position',
      'type' => 'js',
      'path' => 'widget-position/widget-position-min.js',
      'ext' => false,
    ),
    'widget-position-align' => 
    array (
      'requires' => 
      array (
        0 => 'widget-position',
      ),
      'name' => 'widget-position-align',
      'type' => 'js',
      'path' => 'widget-position-align/widget-position-align-min.js',
      'ext' => false,
    ),
    'widget-position-constrain' => 
    array (
      'requires' => 
      array (
        0 => 'widget-position',
      ),
      'name' => 'widget-position-constrain',
      'type' => 'js',
      'path' => 'widget-position-constrain/widget-position-constrain-min.js',
      'ext' => false,
    ),
    'widget-skin' => 
    array (
      'requires' => 
      array (
        0 => 'widget-base',
      ),
      'name' => 'widget-skin',
      'type' => 'js',
      'path' => 'widget-skin/widget-skin-min.js',
      'ext' => false,
    ),
    'widget-stack' => 
    array (
      'requires' => 
      array (
        0 => 'base-build',
        1 => 'widget-base',
        2 => 'widget-htmlparser',
        3 => 'widget-uievents',
        4 => 'widget-skin',
      ),
      'skinnable' => true,
      'name' => 'widget-stack',
      'type' => 'js',
      'path' => 'widget-stack/widget-stack-min.js',
      'ext' => false,
    ),
    'widget-stdmod' => 
    array (
      'requires' => 
      array (
        0 => 'base-build',
        1 => 'widget-base',
        2 => 'widget-htmlparser',
        3 => 'widget-uievents',
        4 => 'widget-skin',
      ),
      'name' => 'widget-stdmod',
      'type' => 'js',
      'path' => 'widget-stdmod/widget-stdmod-min.js',
      'ext' => false,
    ),
    'widget-uievents' => 
    array (
      'requires' => 
      array (
        0 => 'widget-base',
        1 => 'node-event-delegate',
      ),
      'name' => 'widget-uievents',
      'type' => 'js',
      'path' => 'widget-uievents/widget-uievents-min.js',
      'ext' => false,
    ),
    'yql' => 
    array (
      'requires' => 
      array (
        0 => 'jsonp',
        1 => 'jsonp-url',
      ),
      'name' => 'yql',
      'type' => 'js',
      'path' => 'yql/yql-min.js',
      'ext' => false,
    ),
    'yui' => 
    array (
      'name' => 'yui',
      'type' => 'js',
      'path' => 'yui/yui-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
      '_inspected' => true,
    ),
    'yui-base' => 
    array (
      'name' => 'yui-base',
      'type' => 'js',
      'path' => 'yui-base/yui-base-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
      '_inspected' => true,
    ),
    'yui-later' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'yui-later',
      'type' => 'js',
      'path' => 'yui-later/yui-later-min.js',
      'ext' => false,
      '_inspected' => true,
    ),
    'yui-log' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'yui-log',
      'type' => 'js',
      'path' => 'yui-log/yui-log-min.js',
      'ext' => false,
      '_inspected' => true,
    ),
    'yui-rls' => 
    array (
      'name' => 'yui-rls',
      'type' => 'js',
      'path' => 'yui-rls/yui-rls-min.js',
      'ext' => false,
      'requires' => 
      array (
      ),
    ),
    'yui-throttle' => 
    array (
      'requires' => 
      array (
        0 => 'yui-base',
      ),
      'name' => 'yui-throttle',
      'type' => 'js',
      'path' => 'yui-throttle/yui-throttle-min.js',
      'ext' => false,
    ),
  ),
  'base' => 'http://yui.yahooapis.com/3.4.1/build/',
);

 ?>