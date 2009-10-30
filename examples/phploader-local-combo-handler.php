<?PHP include("./inc/header.inc"); ?>
	
	<div id="yui-main">
		<div class="yui-b">
		  <div class="yui-ge">
			  <div class="yui-u first example">

    
	<div class="promo">
	<h1>YUI PHP Loader Utility: Local Combo Handler</h1>
	
	<div class="exampleIntro">
        <p>In this example, we bring a number of YUI components onto the page using the <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a>. This example implements YUI PHP Loader via a <code>YAHOO_util_Loader</code> instance.  We include the YUI PHP Loader script file, then specify in configuration which component we want loaded on the page.  
        The key difference between this and other samples is the use of a local combo handler.  YUI PHP Loader ships with intrinsic combo-handling support.  This feature will allow YUI PHP Loader to combine files without relying on a remote combo-service such as the one outlined <a href="http://developer.yahoo.com/yui/articles/hosting/?#combo">here</a>.  It should also 
        prove useful in environments where SSL is required and/or where including scripts from remote servers is prohibited.
        </p>	
	</div>
			
	</div>
		
	<h2 class="first">Use Case: Using the Local Combo Handler</h2>

<p>This example implements the <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a> to load 
the <a href="http://developer.yahoo.com/yui/calendar/">Calendar Control</a>.  This example is almost identical to the advanced example 
outlined <a href="phploader-advanced.php">here</a>.  The only major difference is that we are enabling the combo handling service and overriding the 
default the combo service location.  By default when combo handling is requested YUI PHP Loader will serve files from Yahoo! 
servers; see "<a href="http://developer.yahoo.com/yui/articles/hosting/">Serving YUI Files from Yahoo!</a>" for important information about this service.</p>

<p>Here's what that looks like in terms of raw source &mdash; this is the full source code for this example: </p>
<textarea name="code" class="php" cols="60" rows="1">
&lt;?PHP
include("loader.php");
$loader = new YAHOO_util_Loader("<?PHP echo($yuiCurrentVersion);?>");

$loader->combine = true;

//Web accessible url to the YUI PHP Loader combo.php file on your server
$loader->comboBase = "http://your-domain-here/phploader/combo.php?";

//Specify YUI components to load
$loader->load("calendar");
?&gt;
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>YUI PHP Loader Utility Advanced Example: Loading YUI Calendar with the YUI PHP Loader Utility</title>
	&lt;?PHP
	//Output the CSS link tags
    echo $loader->css();
	?&gt;
</head>

<body class="yui-skin-sam">

<h1>YUI PHP Loader Utility Advanced Example: Loading the YUI Calendar Control with the YUI PHP Loader Utility</h1>

<p>This example implements the <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a> to load 
the <a href="http://developer.yahoo.com/yui/calendar/">Calendar Control</a>.  This example is almost identical to the 
advanced example outlined <a href="phploader-advanced.php">here</a>.  The only major difference is that we are 
enabling the combo handling service and overriding the default the combo service location.  By default when combo 
handling is requested YUI PHP Loader will serve files from Yahoo! servers; see 
"<a href="http://developer.yahoo.com/yui/articles/hosting/">Serving YUI Files from Yahoo!</a>" for important information 
about this service.</p>

<div id="calendar_container"></div>

&lt;?PHP
//Output the script tags
echo $loader->script();
?&gt;
<script type="text/javascript">
    YAHOO.util.Event.onAvailable("calendar_container", function() {
		var myCal = new YAHOO.widget.Calendar("mycal_id", "calendar_container");
		myCal.render();
	})
</script>
</body>
</html>
</textarea>

<p>This code executes the following steps in order:</p>
<ol>
  <li><strong>YUI PHP Loader loads taking the configuration settings into account.</strong> It gets instructions about what components are required and how to configure them.</li>
  <li><strong>Combine option is enabled and the local combo handler is requested.</strong>  The combo request will be made to the local combo handler instead of the remote combo handling service.  The local combo handler will disassemble the combo url and setup YUI PHP Loader with the desired version and components.</li>
  <li><strong>YUI PHP Loader checks the dependency tree.</strong> The local combo handler returns a single cacheable JavaScript or CSS file.  Separate requests must be made for each resource type via the <em>script</em> and <em>css</em> methods.</li>
</ol>

</div>

<div class="yui-u">	
	<div id="examples">
    	<?PHP include("./inc/phploader.inc"); ?>
    </div>
    <div id="module">
    	<?PHP include("./inc/resources.inc"); ?>
    </div>
</div>
		
</div>
</div>
<?PHP include "./inc/footer.inc" ?>