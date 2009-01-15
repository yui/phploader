<?php

function getRemoteContent($url) {

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,$url); // set url to post to 
    curl_setopt($ch, CURLOPT_FAILONERROR, 1); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable 

    $remote_content = curl_exec($ch);

    curl_close ($ch);

    return $remote_content;
}

$json = getRemoteContent('http://127.0.0.1/src/phploader/yui_module_info/yui3_devel/json.txt');

$inf = json_decode($json, true);

print_r( '<?php $GLOBALS[\'yui_current\'] = ' . var_export($inf, true) . '; ?>');

?>
