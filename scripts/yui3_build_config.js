
var navigator = navigator || {
    userAgent: "custom"
};

var document = document || {

};

var window = window || {
    document: document,
    navigator: navigator
}

load("yui3_version.js");
load("../../yui3/build/yui/yui-debug.js");
load("../../yui3/build/json/json-debug.js");

YUI({

    base: "../../yui3/build/"

}).use("json", function(Y) {

    var l = new Y.Loader({
            base: 'http://yui.yahooapis.com/' + version + '/build/'
        }), o;

        l._setup();

        o = Y.JSON.stringify({
            base: l.base,
            skin: l.skin,
            moduleInfo: l.moduleInfo
        });

    print(o);
    
});

