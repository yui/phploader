<?PHP
include("./inc/config.inc");
include("../phploader/loader.php");

//Create a custom module metadata set
$customModules = array(
    "customJS" => array(
        "name" => 'customJS',
        "type" => 'js', // 'js' or 'css'
        "fullpath" => './assets/custom/data.js', // overrides path
        "requires" => array("event", "dom", "json")
    ),
    "customCSS" => array(
        "name" => 'customCSS',
        "type" => 'css', // 'js' or 'css'
        "fullpath" => './assets/custom/custom.css', // overrides path
    )
);

//Get a new YAHOO_util_Loader instance which includes our custom metadata along with the base YUI metadata
//Note: rand is used here to help cache bust the example
$loader = new YAHOO_util_Loader($yuiCurrentVersion, 'my_custom_config_'.rand(), $customModules);
$loader->load("customJS", "customCSS");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>YUI PHP Loader Utility Example: Adding Custom Modules with YUI Dependencies</title>
	<?PHP echo $loader->css(); ?>
</head>
<body>
    <h1>YUI PHP Loader Utility Example: Adding Custom Modules with YUI Dependencies</h1>
    
    <p><a href="http://developer.yahoo.com/yui/phploader/">The YUI PHP Loader Utility</a> is designed, of course, to 
    help you put YUI components on the page.  While the YUI PHP Loader is great at loading YUI resources it is important 
    to point out that it can also be a great resource for loading custom non-YUI JavaScript and CSS resources on the page 
    as well.  These can be mixed in with YUI dependencies and/or be all custom modules.</p>
    
    <p>This example shows you how to create a set of custom (non-YUI) modules that have YUI component dependencies and 
    load them via YUI PHP Loader.</p>
    
    <p>For this example we will load some local JSON data and a custom CSS module via the 
    <a href="http://developer.yahoo.com/yui/phploader/">YUI PHP Loader Utility</a>.  The custom JavaScript module, <em>customJS</em>, 
    defines dependencies on the YUI DOM, Event, and JSON components so the YUI PHP loader will load these for us as well. When the document 
    is loaded we will process the JSON data with the JSON utility, create additional unordered list items with that data, and apply a CSS class 
    to the last item which will use custom styles defined in our custom CSS module.</p>
    
    <p>An example without YUI dependencies can be found <a href="phploader-custom-modules.php">here</a>.  To make the examples easier to follow 
    the code preforms the exact same functionality.  The biggest difference between these two examples is the usage of YUI Components.  The 
    source for this example, including the server-side PHP code, can be seen <a href="phploader-custom-modules-with-yui.php">here</a>.</p>
    
    <ul id="sample-list">
        <li class="first">This list starts with one static list item</li>
    </ul>

    <?PHP echo $loader->script(); ?>
    
    <script type="text/javascript">
        YAHOO.util.Event.on(window, "load", function() {
            var i,
                tmpLi,
                sampleList = YAHOO.util.Dom.get("sample-list"),
                JSONObject = YAHOO.lang.JSON.parse(JSONString),
                itemCount  = JSONObject.length;
                
            //Look over the JSON data and output a new li for each record
            for(i = 0; i < itemCount; i++) {
                tmpLi = document.createElement("li");
                
                //We'll highlight the last item red using a class from our custom css module
                if (i === itemCount - 1) {
                    YAHOO.util.Dom.addClass(tmpLi, "last");
                }
                
                tmpLi.innerHTML = JSONObject[i].itemText;
                sampleList.appendChild(tmpLi);
            }
        });
    </script>
</body>
</html>
