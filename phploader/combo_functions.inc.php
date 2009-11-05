<?PHP
/**
 *  Copyright (c) 2009, Yahoo! Inc. All rights reserved.
 *  Code licensed under the BSD License:
 *  http://developer.yahoo.net/yui/license.html
 *  version: 1.0.0b2
 */
 
//server(): Computes the base URL of the current page (protocol, server, path)
//credit: http://code.google.com/p/simple-php-framework/ (modified version of full_url), license: MIT
function server($includeRequestURI=false)
{
    $s = getenv('HTTPS') ? '' : (getenv('HTTPS') ==     'on') ? 's' : '';
    $protocol = substr(strtolower(getenv('SERVER_PROTOCOL')), 0, strpos(strtolower(getenv('SERVER_PROTOCOL')), '/')) . $s;
    $port = (getenv('SERVER_PORT') == '80') ? '' : (":".getenv('SERVER_PORT'));
    $server = $protocol . "://" . getenv('HTTP_HOST') . $port;
    
    if ($includeRequestURI === true) {
        $server .= getenv('REQUEST_URI');
    }
    
    return $server;
}

// Computes the *full* URL of the current page (protocol, server, path, query parameters, etc)
    function full_url()
    {
        $s = empty($_SERVER['HTTPS']) ? '' : ($_SERVER['HTTPS'] == 'on') ? 's' : '';
        $protocol = substr(strtolower($_SERVER['SERVER_PROTOCOL']), 0, strpos(strtolower($_SERVER['SERVER_PROTOCOL']), '/')) . $s;
        $port = ($_SERVER['SERVER_PORT'] == '80') ? '' : (":".$_SERVER['SERVER_PORT']);
        return $protocol . "://" . $_SERVER['HTTP_HOST'] . $port . $_SERVER['REQUEST_URI'];
    }

function alphaImageLoaderPathCorrection($matches) {
    global $crtResourceBase;
    
    $matchedFile  = substr($matches[1], strrpos($matches[1], "/") + 1);
    $newFilePath = 'AlphaImageLoader(src=\'' . $crtResourceBase . $matchedFile . '\'';
    
    return $newFilePath;
}
?>