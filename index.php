<?PHP include("./examples/inc/config.inc"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>YUI Library: YUI Loader Utility</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="examples/assets/reset-fonts-grids-min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="examples/assets/dpSyntaxHighlighter.css">
	<link rel="stylesheet" type="text/css" href="examples/assets/yui.css">
	<link rel="shortcut icon" href="examples/assets/favicon.ico" type="image/x-icon"> 
</head>
<body id="yahoo-com" class=" yui-skin-sam">
<div id="doc3" class="yui-t7">
<div id="hd">
	<div id="ygunav">
		<p><em>
			<a href="http://developer.yahoo.com">Developer Network Home</a> <i> - </i>	
			<a href="http://help.yahoo.com/help/us/ysearch">Help</a>
			</em>
		</p>
	</div>
	<div id="ygma"><a href="/"><img src="http://l.yimg.com/a/i/us/nt/ma/ma_devnet_1.gif"  border="0"></a></div>
	<div id="pagetitle"><h1>YUI Library: YUI PHP Loader Utility</h1></div>
</div>
<div id="bd">
<div id="yui-main">
<div class="yui-b">
  <div class="yui-ge">
      <div class="yui-u first">
	  
  <div id="promo" class="component">
    <h1>Yahoo! UI Library: YUI PHP Loader</h1>

<p>The YUI PHP Loader Utility is a server-side utility that allows you to load specific YUI components and their dependencies into your page via PHP.  YUI PHP Loader can operate as a holistic solution by loading all of your necessary YUI components, or it can be used to add one or more components to a page on which some YUI content already exists.</p>

<p>YUI PHP Loader adds value in the following ways:</p>
<ol>
  <li><strong>Reliable, sorted loading of dependencies:</strong> YUI comprises more than two-dozen components, many of which work together to provide the best possible compromise between compartmentalization and code reuse. Because of this, YUI components often need to load with specific dependencies in a specific order. YUI PHP Loader understands which components depend on one another, and based on this knowledge it ensures that the right resources are loaded in the right order.</li>
  <li><strong>Automatic use of rolled-up files.</strong> YUI PHP Loader knows about all of the built-in rollup files that ship with YUI — like the yahoo-dom-event.js file that contains the <a href="http://developer.yahoo.com/yui/yahoo/">Yahoo Global Object</a>, the <a href="http://developer.yahoo.com/yui/dom/">Dom Collection</a>, and the <a href="http://developer.yahoo.com/yui/event/">Event Utility</a>, three components that are commonly used together. By automatically using rolled-up files when it makes sense to do so, the YUI PHP Loader helps you <a href="http://yuiblog.com/blog/2006/11/28/performance-research-part-1/">reduce HTTP requests</a> and thereby keep your page as efficient as possible.</li>

</ol>

<p>As you think about how you want to load YUI on the page, you may find it useful to refer to this overview of some of the most common loading strategies and their relative merits:</p>
<ul>
      <li>"<a href="http://yuiblog.com/blog/2008/10/17/loading-yui/">Loading YUI: Seeds, Core, and Combo-handling</a>", by Eric Miraglia on <a href="http://yuiblog.com/">YUIBlog</a>.<br />(<em>Note</em>: While this reference talks mostly about client side loading the basic concepts are still applicable)</li>
</ul>

<div>
    <h4>On This Page:</h4>
    <ul>
      <li><a href="#start">Getting Started</a></li>
      <li><a href="#using">Simple Use Case: Adding YUI Components to the Page with the <code>load()</code> Method</a> </li>
      <li><a href="#config">Configuration Options</a> </li>
	  <li><a href="#modulenames">YUI Module Names</a>
	  <li><a href="#using2">Refining Our Use Case: Cutting out extra HTTP requests</a> </li>
	  <li><a href="#metainfo">Understanding the Metadata</a> </li>
      <li><a href="#support">Support &amp; Community</a></li>
	  <li><a href="#filingbugs">Filing Bugs and Feature Requests</a></li>
    </ul>
  </div>
  <div id="quicklinks">
      <h4>Quick Links:</h4>
      <ul>
        <li><a href="api_docs/index.html">API Documentation</a></li>
        <li><a href="http://yuilibrary.com/downloads/">Download YUI PHP Loader</a> from YUILibrary.com: YUI PHP Loader is available from the YUI project website, but it is a separate download from the YUI JavaScript/CSS library.</li>
    </ul>
    </div>
</div>

<h2 class="first" id="start">Getting Started</h2>
  
<p>After downloading YUI PHP Loader the archive needs to be extracted somewhere within the servers webroot (e.g.) htdocs/phploader.  To begin using the loader you must include the base class file and call the YAHOO_util_Loader constructor with a YUI version number to create an instance of the Loader.  The chosen version must have corresponding <a href="#metainfo">metadata</a> available within your local YUI PHP Loader installation.</p>
<textarea name="code" class="PHP" cols="60" rows="1">
    //Include the loader class file    
    include("loader.php");

    //Get an instance   
    $loader = new YAHOO_util_Loader("<?PHP echo($yuiCurrentVersion);?>");
</textarea>

<h2 id="using">Simple Use Case: Adding YUI Components to the Page with the <code>load()</code> Method</a></h2>

<p>YUI PHP Loader makes it a simple thing to get started using YUI components. After creating an instance of YAHOO_util_Loader tell it what you want to load, and let it sort out all of the dependencies on your behalf.  When you are ready to output the CSS and/or JavaScript files simply call the <code>tags()</code> method.  Since we will cover the benefits of using rollup files later in this document we will turn them off for this first example.</p>
<textarea name="code" class="PHP" cols="60" rows="1">
    include("loader.php");
    $loader = new YAHOO_util_Loader("<?PHP echo($yuiCurrentVersion);?>");
    
    //Turn off rollups
    $loader->allowRollups = false;
    
    //Specify YUI components to load
    $loader->load("yahoo", "dom", "event", "tabview", "grids", "fonts", "reset");
    
    //Output the tags (this call would most likely be placed in the document head)
    $loader->tags();
    
    /*
    This call will produce an output similar to the following:
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/fonts/fonts-min.css" />
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/grids/grids-min.css" />
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/reset/reset-min.css" />
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/tabview/assets/skins/sam/tabview.css" />
    <script type="text/javascript" src="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/yahoo/yahoo-min.js"></script>
    <script type="text/javascript" src="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/dom/dom-min.js"></script>
    <script type="text/javascript" src="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/event/event-min.js"></script>
    <script type="text/javascript" src="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/element/element-min.js"></script>
    <script type="text/javascript" src="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/tabview/tabview-min.js"></script>
    */
</textarea>


<h2 id="config">Configuration Options</h2>

<p>The following configuration options are supported by the YUI PHP Loader Utility.
These can be set individually on a YUI PHP Loader instance:</p>

<div class="apisummary">
<table>
    <thead>
		<tr>
			<th>Configuration Option</th>
			<th>Purpose</th>
		</tr>
    </thead>
	<tbody>
        <tr>
            <td>base</td>
            <td>(string) Allows you to specify a different location (as a full or relative filepath) for the YUI build directory. By default, YUI PHP Loader will <a href="http://developer.yahoo.com/yui/articles/hosting/">serve files from Yahoo's servers</a>.</td>
        </tr>
        <tr class="odd">
            <td>filter</td>
            <td>
             (string) A filter to apply to result urls.  This filter will modify the default
             path for all modules.  The default path for the YUI library is the
             minified version of the files (e.g., event-min.js).  The valid filters are:
             <dl>
              <dt>YUI_DEBUG</dt>
              <dd>Selects the debug versions of the library (e.g., event-debug.js).
                  This option will automatically include the logger widget</dd>
              <dt>YUI_RAW</dt>
              <dd>Selects the non-minified version of the library (e.g., event.js).
             </dl>
            </td>
        </tr>
        <tr>
            <td>allowRollups</td>
            <td>(boolean) Should Loader use aggregate files (like <code>yahoo-dom-event.js</code> or <code>utilities.js</code>) that combine several YUI components in a single HTTP request?  Default: true.</td>
        </tr>
        <tr class="odd">
            <td>loadOptional</td>
            <td>(boolean) Should loader load optional dependencies for the components you're requesting? (Note: If you only want <em>some</em> but not <em>all</em> optional dependencies, you can list out the dependencies you want as part of your <code>required</code> list.) Default: false.</td>
        </tr>
        <tr>
            <td>combine</td>

            <td>(boolean) If set to true, YUI files will be combined into a single request using the combo service provided on the Yahoo! CDN</td>
        </tr>
        <tr class="odd">
            <td>comboBase</td>
            <td>
                (string) The base path to the Yahoo! CDN service.  Default: http://yui.yahooapis.com/combo?<br/>
                Note: YUI PHP Loader also ships with an intrinsic, lightweight combo-handler (see combo.php).  Refer to the included examples for a use case on this.
            </td>
        </tr>
    </tbody> 
    </table>
</div>

<h2 id="modulenames">YUI Module Names</h2>

<p>Each YUI component has a corresponding module name that is used as a unique identifier within YUI scripts.  For example, the <a href="http://developer.yahoo.com/yui/event/">Event Utility</a> is internally referred to as <code>"event"</code>.  YUI PHP Loader loads components based on these unique module names.  Here is the full list of YUI module names.  All except YUI PHP Loader itself can be loaded via the Loader component.</p>

<div class="apisummary">
<?PHP
include "./examples/inc/moduleNames.inc";
echo $moduleNamesTable;
?>
</div>

<p>YUI ships with some aggregate or "rollup" files, each comprising two or more modules, to help you reduce the number of HTTP requests you make while loading YUI content.  Each aggregate file has its own module name.  Moreover, some modules provide the functionality of one or more modules in the above list.</p>

<p>When you choose to <code><a href="http://developer.yahoo.com/yui/docs/YAHOO.util.YUILoader.html#property_allowRollup">allowRollup</a></code>s, YUI PHP Loader will choose the most appropriate set of files to meet your requirements while using the smallest number of included files. You can also specify an aggregate file directly as a requirement by requesting it by its own module name.  The following is a list of modules that aggregate or include multiple modules:</p>

<div class="apisummary">
<?PHP
echo $rollupNamesTable;
?>
</div>

<h2 id="using2">Refining Our Use Case: Cutting out extra HTTP requests</h2>

<p>As noted in the <a href="#config">configuration table</a> the YUI PHP Loader provides some additional parameters that give us even more control over the loading and performance of our component selections.  By simply enabling rollups in this example we can cut down the total HTTP requests from 9 to 5.  If we enabled combo handling in addition to rollups we can reduce this down to just 2 HTTP requests; one per tag type (i.e.) link and script.</p>
<textarea name="code" class="PHP" cols="60" rows="1">
    include("loader.php");
    $loader = new YAHOO_util_Loader("<?PHP echo($yuiCurrentVersion);?>");
    
    //Turn on rollups (this is actually on by default)
    $loader->allowRollups = true;
    
    //Specify YUI components to load
    $loader->load("yahoo", "dom", "event", "tabview", "grids", "fonts", "reset");
    
    /*
    A call to tags method here would produce an output similar to the following:
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/reset-fonts-grids/reset-fonts-grids.css" />
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/tabview/assets/skins/sam/tabview.css" />
    <script type="text/javascript" src="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/yahoo-dom-event/yahoo-dom-event.js"></script>
    <script type="text/javascript" src="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/element/element-min.js"></script>
    <script type="text/javascript" src="http://yui.yahooapis.com/<?PHP echo($yuiCurrentVersion);?>/build/tabview/tabview-min.js"></script>
    */
    
    //Enable combo handling
    $loader->combine = true;
    
    //Output the tags (this call would most likely be placed in the document head)
    $loader->tags();
    
    /*
    The final output would now be similar to the following, a single HTTP request for each type (i.e.) CSS and JavaScript:
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?<?PHP echo($yuiCurrentVersion);?>/build/reset-fonts-grids/reset-fonts-grids.css&<?PHP echo($yuiCurrentVersion);?>/build/tabview/assets/skins/sam/tabview.css" />
    <script type="text/javascript" src="http://yui.yahooapis.com/combo?<?PHP echo($yuiCurrentVersion);?>/build/yahoo-dom-event/yahoo-dom-event.js&<?PHP echo($yuiCurrentVersion);?>/build/element/element-min.js&<?PHP echo($yuiCurrentVersion);?>/build/tabview/tabview-min.js"></script></head>
    */
</textarea>

<p>In addition to the <code>tags()</code> method there are a number of other class methods that will allow you to do things like embed the code inline and fetch the CSS &amp; JavaScript seperately which is not a bad idea since there are <a href="http://developer.yahoo.com/performance/rules.html">well known performance benefits</a> to placing CSS in the document head and JavaScript near the bottom of your document.  For more information on these and other methods please refer to the API documents.</p>

<h2 id="metainfo">Understanding the Metadata</h2>

<p>YUI PHP Loader relies on metadata files to calculate module dependencies, rollups, sort order, etc.  The metadata files are located in the lib/meta folder.  By default YUI PHP Loader ships with metadata for the latest YUI releases; both versions 2 and 3.  Additional metadata can be added as needed to support older and/or newer YUI releases.  YUI PHP Loader uses pre-built PHP config files first, but is capable of parsing YUI JSON metadata files if no PHP config file is available.  The naming convention for PHP config files is <em>config_{yui version}.php</em> (e.g.) config_<?PHP echo($yuiCurrentVersion);?>.php.  The naming convention for JSON config files is <em>json_{yui version}.txt</em> (e.g.) json_<?PHP echo($yuiCurrentVersion);?>.txt.</p>

<?PHP include "./examples/inc/support.inc"; ?>

</div>

<div class="yui-u">		

<div id="examples">
    <h3>YUI PHP Loader Utility Examples:</h3>
    <ul>
        <li><a href='examples/phploader-basic.php'>Using YUI PHP Loader to Load the Calendar Control (Basic)</a></li>
        <li><a href='examples/phploader-advanced.php'>Using YUI PHP Loader to Load the Calendar Control (Advanced)</a></li>
        <li><a href='examples/phploader-custom-modules.php'>Adding Custom (Non-YUI) Content with YUI PHP Loader</a></li>
        <li><a href='examples/phploader-custom-modules-with-yui.php'>Adding Custom Modules with YUI Dependencies</a></li>
        <li><a href='examples/phploader-local-combo-handler.php'>Using the Local Combo Handler</a></li>
    </ul>
</div>


		 </div>
  </div>

</div>
</div>
	<div id="ft">
        <p class="first">Copyright &copy; <?PHP print strftime("%Y"); ?> Yahoo! Inc. All rights reserved.</p>
        <p><a href="http://info.yahoo.com/privacy/us/yahoo/devel/details.html">Privacy Policy</a> - 
            <a href="http://docs.yahoo.com/info/terms/">Terms of Service</a> - 
            <a href="http://docs.yahoo.com/info/copyright/copyright.html">Copyright Policy</a> - 
            <a href="http://careers.yahoo.com/">Job Openings</a></p>
	</div>
</div>

<script src="examples/assets/dpSyntaxHighlighter.js"></script>
<script language="javascript"> 
dp.SyntaxHighlighter.HighlightAll('code'); 
</script>

</body>
</html>