<?php
/**
 *  Copyright (c) 2009, Yahoo! Inc. All rights reserved.
 *  Code licensed under the BSD License:
 *  http://developer.yahoo.net/yui/license.html
 *  version: 1.0.0b1
 */
?>
<dl>
<?php
    foreach ($_SERVER as $name => $value) {
        // if ( strstr($name, 'YUI_') == $name ) { // this works
        if ( strpos($name, 'YUI_') !== false ) {   // this is faster
            echo "<dt>$name:</dt><dd>$value</dd>\n";
        }
    }
?>
</dl>
