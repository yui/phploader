<?PHP
include("../loader.php");

$loader = new YAHOO_util_Loader("3.0.0b1");
$loader->combine = true;
$loader->comboBase = "http://localhost/phploader/phploader/combo.php?";
$loader->load("stylesheet");

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
