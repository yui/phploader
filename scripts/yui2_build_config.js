
var navigator = navigator || {
    userAgent: "custom"
};

var document = document || {

};

var window = window || {
    document: document,
    navigator: navigator
}

load("yui2_version.js");

load("../../yui2/build/yuiloader/yuiloader.js");
load("../../yui2/build/json/json.js");

var l = new YAHOO.util.YUILoader();

print(YAHOO.lang.JSON.stringify({
                'base': 'http://yui.yahooapis.com/' + version + '/build/',
                'skin': l.skin,
                'moduleInfo': l.moduleInfo
            
            }));

