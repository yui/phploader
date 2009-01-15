# requires spidermonkey/rhino
java -jar js.jar yui2_build_config.js $* > ../yui_module_info/yui2_devel/json.txt
php yui2_build_config.php > ../yui_module_info/yui2_devel/config.php
