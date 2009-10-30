<?PHP
/**
 *  Copyright (c) 2009, Yahoo! Inc. All rights reserved.
 *  Code licensed under the BSD License:
 *  http://developer.yahoo.net/yui/license.html
 *  version: 1.0.0b2
 */
?>
<html>
<head>

</head>

<body>

<div id="out"></div>

<script>
function c(inf) {
    document.getElementById("out").innerHTML += "<br />" + inf.name;
}
YAHOO_config = {
    listener: c
}
</script>

<?PHP 

define('SKIP_CONTENT_TYPE', true);
define('OVERRIDE_BASE', "/build/");

include("loader-inc.php"); 

?>

</body>
</html>

<?PHP //header('Content-type: text/html'); ?>
