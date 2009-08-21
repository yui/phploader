<?PHP
include("./inc/config.inc");
include("../phploader/loader.php");
$loader = new YAHOO_util_Loader($yuiCurrentVersion); //(ex) 2.7.0

//Specify YUI components to load
$loader->load("calendar");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>YUI PHP Loader Utility Advanced Example: Loading YUI Calendar with the YUI PHP Loader Utility</title>
	<?PHP
	//Output the CSS link tags
    echo $loader->css();
	?>
</head>

<body class="yui-skin-sam">

<h1>YUI PHP Loader Utility Advanced Example: Loading the YUI Calendar Control with the YUI PHP Loader Utility</h1>

<p>In this example, we bring a YUI component onto the page using the <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a>. This example implements YUI PHP Loader via a <code>YAHOO_util_Loader</code> instance.  We include the YUI PHP Loader class file, then specify in configuration which component we want loaded on the page &mdash; and what we want to do once it <em>is</em> loaded.  The main difference between this advanced example and the simple one show <a href="./phploader-basic.html">here</a> is that this one outputs the CSS and JavaScript files separately with two different method calls.  The CSS files are included in the document head and the JavaScript files are included just before the closing body node.  This is done in accordance with the best practice performance recommendations outlined <a href="http://developer.yahoo.com/performance/rules.html">here</a>.</p>

<div id="calendar_container"></div>

<?PHP
//Output the script tags
echo $loader->script();
?>
<script type="text/javascript">
    YAHOO.util.Event.onAvailable("calendar_container", function() {
		var myCal = new YAHOO.widget.Calendar("mycal_id", "calendar_container");
		myCal.render();
	})
</script>
</body>
</html>
