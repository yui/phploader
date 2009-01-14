<?php

    function getRemoteContent($url) {
        $content = "";
        $remote_content = apc_fetch($url);

        if (!$remote_content) {

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL,$url); // set url to post to 
            curl_setopt($ch, CURLOPT_FAILONERROR, 1); 
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable 
            // curl_setopt($ch, CURLOPT_TIMEOUT, 3); // times out after 4s

            $remote_content = curl_exec($ch);

            // save the contents of the remote url for 30 minutes
            apc_store($url, $remote_content, 1800);

            curl_close ($ch);
        }

        $content = $remote_content;
        return $content;
    }

$json = getRemoteContent('http://127.0.0.1/phploader/phploader/YUIJSON.txt');

$inf = json_decode($json, true);

print_r( '<?php $yui_current = ' . var_export($inf, true) . '; ?>');

?>
