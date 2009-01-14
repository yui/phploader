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

<?php 

define('SKIP_CONTENT_TYPE', true);
define('OVERRIDE_BASE', "/build/");

include("loader-inc.php"); 

?>

</body>
</html>

<?php //header('Content-type: text/html'); ?>
