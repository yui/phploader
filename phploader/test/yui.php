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
