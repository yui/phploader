<?PHP include("./inc/header.inc"); ?>
	
	<div id="yui-main">
		<div class="yui-b">
		  <div class="yui-ge">
			  <div class="yui-u first example">

    
	<div class="promo">
	    <h1>YUI PHP Loader Utility: Adding Custom (Non-YUI) Content with YUI PHP Loader</h1>
    	<div class="exampleIntro">
    	    <p><a href="http://developer.yahoo.com/yui/phploader/">The YUI PHP Loader Utility</a> is designed, of course, to 
    	    help you put YUI components on the page.  While the YUI PHP Loader is great at loading YUI resources it is important 
    	    to point out that it can also be a great resource for loading custom non-YUI JavaScript and CSS resources on the page 
    	    as well.  These can be mixed in with YUI dependencies and/or be all custom modules.</p>
            
            <p>This example shows you how to create a set of custom (non-YUI) modules and load them via YUI PHP Loader.</p>
	    </div>
	    
	    <div class="example-container module  newWindow">
    		<div id="example-canvas" class="bd">
    		    <p class="newWindowButton yui-skin-sam"><span id="newWindowLink"><span class="first-child"><a href="phploader-custom-modules_source.php" target="_blank">View example in new window.</a></span></span>			
    	    </div>
    	</div
	</div>
		
	<h2 class="first">Defining a Custom Module</h2>

    <p>
    The YAHOO_util_Loader class constructor accepts four parameters:
    </p>
    <ol>
        <li><strong>yuiVersion</strong>: Version of YUI metadata to load</li>
        <li><strong>cacheKey</strong>: Unique name to use as the <a href="http://us.php.net/manual/en/book.apc.php">APC</a> cache key.  Module calculations 
        are cached for performance if the environment supports APC.</li>
        <li><strong>modules</strong>: An array of custom modules</li>
        <li><strong>noYUI</strong>: Enable or disable the base YUI metadata</li>
    </ol>
    
    <p>The <em>modules</em> parameter expects an associative array.  The array should consist of custom JavaScript and/or 
    CSS modules.  The modules array format mirrors that of the YUI metadata included with PHP Loader.  Use the metadata in the lib/meta folder as
    a reference for determining all the possible options.  Below is an example of such an array:</p>
    
    <textarea name="code" class="php" cols="60" rows="1">
    $customModules = array(
        "JSONModule" => array(
            "name" => 'JSONModule',
            "type" => 'js', // 'js' or 'css'
            // "requires" => array('event', 'dom'),
            // "optional" => array('connection'),
            // "supersedes" => array('something'), // if a rollup
            // "rollup" => 3, // the rollup threshold
            // "path" => 'path/to/file.js', // includes base
            "fullpath" => 'http://www.json.org/json2.js' // overrides path
        )
    );
    </textarea>
    
    <p><strong>Note:</strong> The module names must be unique and should not conflict with any of the existing YUI 
    component names if you have chosen to leave the YUI metadata enabled.  To make a custom module dependent on an existing
    YUI module simply default a <em>requires</em> key/value pair that lists out the desired YUI components.</p>

    <h2>Simple Example with no YUI Dependencies</h2>
    
    <p>For this example we will load a remote JavaScript resource (i.e.) Douglas Crockford's JSON utility from 
    <a href="http://json.org/">JSON.org</a>, some local JSON data, and a custom CSS module via the 
    <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a>.  When the document is loaded will 
    process the JSON data with the JSON utility, create additional unordered list items with that data, and apply a CSS class 
    to the last item which will use custom styles defined in our custom CSS module.</p>
    
<p>Here's what that looks like in terms of raw source &mdash; this is the full source code for this example: </p>
<textarea name="code" class="php" cols="60" rows="1">
&lt;?PHP
include("loader.php");

//Create a custom module metadata set
$customModules = array(
    "JSONModule" => array(
        "name" => 'JSONModule',
        "type" => 'js', // 'js' or 'css'
        "fullpath" => 'http://www.json.org/json2.js' // overrides path
    ),
    "customJS" => array(
        "name" => 'customJS',
        "type" => 'js',
        "fullpath" => './assets/custom/data.js',
        "requires" => array('JSONModule')
    ),
    "customCSS" => array(
        "name" => 'customCSS',
        "type" => 'css',
        "fullpath" => './assets/custom/custom.css'
    )
);

//Get a new YAHOO_util_Loader instance which includes just our custom metadata (No YUI metadata)
//Note: rand is used here to help cache bust the example
$loader = new YAHOO_util_Loader('<?PHP echo($yuiCurrentVersion);?>', 'my_custom_config_'.rand(), $customModules, true);
$loader->load("JSONModule", "customJS", "customCSS");
?&gt;

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>YUI PHP Loader Utility Example: Adding Custom (Non-YUI) Content with YUI PHP Loader</title>
	&lt;?PHP echo $loader->css(); ?&gt;
</head>
<body>
    <h1>YUI PHP Loader Utility Example: Adding Custom (Non-YUI) Content with YUI PHP Loader</h1>

    <p><a href="http://developer.yahoo.com/yui/phploader/">The YUI PHP Loader Utility</a> is designed, of course, to 
    help you put YUI components on the page.  While the YUI PHP Loader is great at loading YUI resources it is important 
    to point out that it can also be a great resource for loading custom non-YUI JavaScript and CSS resources on the page 
    as well.  These can be mixed in with YUI dependencies and/or be all custom modules.</p>
    
    <p>This example shows you how to create a set of custom (non-YUI) modules and load them via YUI PHP Loader.</p>
    
    <p>For this example we will load a remote JavaScript resource (i.e.) Douglas Crockford's JSON utility from 
    <a href="http://json.org/">JSON.org</a>, some local JSON data, and a custom CSS module via the 
    <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a>.  When the document is loaded will 
    process the JSON data with the JSON utility, create additional unordered list items with that data, and apply a CSS class 
    to the last item which will use custom styles defined in our custom CSS module.  The source for this example, including 
    the server-side PHP code, can be seen <a href="phploader-custom-modules.php">here</a>.</p>
    
    <ul id="sample-list">
        <li class="first">This list starts with one static list item</li>
    </ul>

    &lt;?PHP echo $loader->script(); ?&gt;
    
    <script type="text/javascript">
        window.onload = function() {
            var i,
                tmpLi,
                sampleList = document.getElementById("sample-list"),
                JSONObject = JSON.parse(JSONString),
                itemCount  = JSONObject.length;
                
            //Look over the JSON data and output a new li for each record
            for(i = 0; i < itemCount; i++) {
                tmpLi = document.createElement("li");
                
                //We'll highlight the last item red using a class from our custom css module
                if (i === itemCount - 1) {
                    tmpLi.className = 'last';
                }
                
                tmpLi.innerHTML = JSONObject[i].itemText;
                sampleList.appendChild(tmpLi);
            }
        };
    </script>
</body>
</html>
</textarea>

<p>This code executes the following steps in order:</p>
<ol>
    <li><strong>The YUI PHP Loader class is included</strong></li>
    <li><strong>A custom module set is defined</strong></li>
    <li><strong>An instance of YUI PHP Loader is created:</strong> Our custom module set is passed to the Loader</li>
    <li><strong>YUI PHP Loader calculates the dependencies and order of our custom modules: </strong>The Loader knows 
    our <em>customJS</em> module is dependent on our <em>JSONModule</em> module.</li>
    <li><strong>YUI PHP Loader loads the modules and is used to output the CSS and JavaScript: </strong>The &lt;link&gt; 
    nodes are output in the document head and the &lt;script&gt; nodes are output just before the closing body node.  This 
    is in accordance with the best practice performance recommendations outlined <a href="http://developer.yahoo.com/performance/rules.html">here</a>.</li>
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