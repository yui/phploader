# requires spidermonkey/rhino
java -jar js.jar yui3_build_config.js $* > ../yui_module_info/yui3_devel/json.txt
php yui3_build_config.php > ../yui_module_info/yui3_devel/config.php
