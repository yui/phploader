/**
 *
 * jslint_console is a simple console wrapper for Doug Crockford's jslint
 * application:  http://www.crockford.com/jslint/lint.html
 *
 * Config: specify the path to fulljslint.js, available for download
 * at the above site.
 *
 * The included jslint.sh file provides the mechanism to pipe a file's
 * contents, using SpiderMonkey, into jslint_console
 *
 */

var navigator = {
    userAgent: "custom"
};

load("http://yui.yahooapis.com/2.3.1/build/yahoo/yahoo-min.js");
load("http://yui.yahooapis.com/2.3.1/build/yuiloader/yuiloader-beta-min.js");
load("../../build/json/json-beta.js");

var l = new YAHOO.util.YUILoader();

print(YAHOO.lang.JSON.stringify({

                base: l.base,
                skin: l.skin,
                moduleInfo: l.moduleInfo
            
            }));

