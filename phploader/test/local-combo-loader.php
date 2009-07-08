<?PHP
/**
 *  Copyright (c) 2009, Yahoo! Inc. All rights reserved.
 *  Code licensed under the BSD License:
 *  http://developer.yahoo.net/yui/license.html
 *  version: 1.0.0b1
 */
 
include("../loader.php");

$loader = new YAHOO_util_Loader("2.7.0");
$loader->combine = true;
//$loader->comboBase = "http://localhost/phploader/phploader/combo.php?";
$loader->load("colorpicker");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>test-local-combo-loader</title>
	<?PHP echo $loader->css(); ?>
</head>

<body>

<?PHP echo $loader->script(); ?>
</body>
</html>
