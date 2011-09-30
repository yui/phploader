#!/usr/bin/env php
<?php

chdir(dirname(__FILE__));

$version = $argv[1];

$cwd = getcwd();

if (!$version) {
    echo('Please provide a version to convert');
    exit;
}



$config = json_decode(file_get_contents($cwd.'/../lib/meta/json_'.$version.'.txt'), true);

$out = '<?php $GLOBALS[\'yui_current\'] = ' . var_export($config, true) . '; ?>';

file_put_contents($cwd.'/../lib/meta/config_'.$version.'.php', $out);
echo('Finished converting JSON to PHP\n');
?>
