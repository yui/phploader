<?PHP include("./inc/header.inc");?>
	
	<div id="yui-main">
		<div class="yui-b">
		  <div class="yui-ge">
			  <div class="yui-u first example">

    
	<div class="promo">
	<h1>YUI PHP Loader Utility: Mixed Loading Methods</h1>
	
	<div class="exampleIntro">
        <p>In this example, we bring YUI components onto the page using a mixture of static and dynamic loading methods.  A static script include is used to bring in the <a href="http://developer.yahoo.com/yui/yahoo/">Yahoo Global Object</a>, the <a href="http://developer.yahoo.com/yui/dom/">Dom Collection</a>, the <a href="http://developer.yahoo.com/yui/event/">Event Utility</a> components.  The <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a> is used to load the Calendar component. This example implements YUI PHP Loader via a <code>YAHOO_util_Loader</code> instance.  We include the YUI PHP Loader script file, then specify in configuration which component we want loaded on the page, which components to skip loading since they are already present on the page, and what we want to do once everything <em>is</em> loaded.</p>
        <p>This example loads in new window to demonstrate a somewhat more advanced use case &mdash; a page with no other content, wherein the Loader is introducing YUI into a simple context.</p>	
	</div>	
					
	<div class="example-container module  newWindow">
		<div id="example-canvas" class="bd">
		<p class="newWindowButton yui-skin-sam"><span id="newWindowLink"><span class="first-child"><a href="phploader-mixed-loading_source.php" target="_blank">View example in new window.</a></span></span>			
	</div>
	
	</div>			
	</div>
		
	<h2 class="first">Advanced Use Case: Mixed Loading Methods</h2>

<p>This example implements the <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a> to load the <a href="http://developer.yahoo.com/yui/calendar/">Calendar Control</a>.</p>

<p>The workflow happens in four steps:</p>
<ol>
  <li><strong>Include the YUI PHP Loader class file</strong></li>
  <li><strong>Create a <code>YAHOO_util_YUILoader</code> instance:</strong> Set configuration flags as needed, call the load method with a list of components to load, notify the loader of any modules to avoid loading, and define what to do once the components are loaded (in this case, once the components are loaded we instantiate a Calendar Control on the page).</li>
  <li><strong>Ouput YUI CSS &lt;link&gt; nodes</strong></li>
  <li><strong>Ouput YUI JavaScript &lt;script&gt; nodes </strong></li>
</ol>
<p>Here's what that looks like in terms of raw source &mdash; this is the full source code for this example: </p>
<textarea name="code" class="php" cols="60" rows="1">
&lt;?PHP
include("loader.php");
$loader = new YAHOO_util_Loader("<?PHP echo $yuiCurrentVersion;?>");

//Specify YUI components to load
$loader->load("calendar");
?&gt;
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>YUI PHP Loader Utility Advanced Example: Mixed Loading Methods</title>
	&lt;?PHP
	//Output the CSS link tags
    echo $loader->css();
	?&gt;
</head>

<body class="yui-skin-sam">

<h1>YUI PHP Loader Utility Advanced Example: Mixed Loading Methods</h1>

<p>In this example, we bring a YUI component onto the page using the <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a>. 
This example implements YUI PHP Loader via a <code>YAHOO_util_Loader</code> instance.  We include the YUI PHP Loader class file, then specify in 
configuration which component we want loaded on the page &mdash; and what we want to do once it <em>is</em> loaded.  The main difference between 
this example and the previous advanced example is that we have mixed the component loading methods.  The Calender component requires the Yahoo, Dom, 
and Event modules.  In the previous example we let PHP Loader bring these into the document for us.  However, in this case we placed a static 
script include into the document that brings in these resources.  We do not wish to have PHP Loader duplicate the loading of these components so 
we utilize the <em>setLoaded</em> method to notify PHP Loader that we already have these components in the document and to skip loading them a second time.</p>

<div id="calendar_container"></div>

<script type="text/javascript" src="http://yui.yahooapis.com/<?PHP echo $yuiCurrentVersion;?>/build/yahoo-dom-event/yahoo-dom-event.js"></script>
&lt;?PHP
//Output the script tags (but don't re-include yahoo-dom-event)
$loader->setLoaded("yahoo", "dom", "event");
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
  <li><strong>YUI PHP Loader checks the dependency tree.</strong> Loader knows that the Calendar component requires the <a href="http://developer.yahoo.com/yui/yahoo/">Yahoo Global Object</a>, the <a href="http://developer.yahoo.com/yui/dom/">Dom Collection</a>, and the <a href="http://developer.yahoo.com/yui/event/">Event Utility</a> components.  Normally the loader would bring these dependencies into the page for us, but in this case the <em>setLoaded</em> method was used to have the loader avoid loading these resources since they were already included via a static script node.</li>
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