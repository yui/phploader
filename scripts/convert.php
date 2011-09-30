#!/usr/bin/env php
<?php

chdir(dirname(__FILE__));

$version = $argv[1];

$cwd = getcwd();

if (!$version) {
    echo('Please provide a version to convert');
    exit;
}


if (!is_file($cwd.'/../lib/meta/json_'.$version.'.txt')) {
    echo('Please run export_modules.js first!');
    exit;
}
$config = json_decode(file_get_contents($cwd.'/../lib/meta/json_'.$version.'.txt'), true);

if (is_file($cwd.'/../lib/meta/json_aliases_'.$version.'.txt')) {
    $aliases = json_decode(file_get_contents($cwd.'/../lib/meta/json_aliases_'.$version.'.txt'), true);
}


$out = '<?php $GLOBALS[\'yui_current\'] = ' . var_export($config, true) . ';'."\n\n";
if ($aliases) {
    $out .= '$GLOBALS[\'yui_current_aliases\'] = ' . var_export($aliases, true) . ';'."\n";
}
$out .= ' ?>';

file_put_contents($cwd.'/../lib/meta/config_'.$version.'.php', $out);
echo("Finished converting JSON to PHP\n");
?>
