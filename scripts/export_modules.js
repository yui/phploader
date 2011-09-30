#!/usr/bin/env node

var args  = process.argv.slice(2);

var fs = require('fs'),
    path = require('path'),
    yui3 = path.resolve(args[0]) || path.join(__dirname, '../../yui');

if (!path.existsSync(yui3)) {
    console.error('YUI 3 source tree was not found: ', yui3);
    console.error(' FYI, you can pass the path as an argument..');
    process.exit(1);
}

var YUI = require(path.join(yui3, 'build/yui/yui')).YUI;

var Y = YUI();

var loader = new Y.Loader({});

var out = path.join(__dirname, '../lib/meta/json_' + Y.version + '.txt');

fs.writeFileSync(out, JSON.stringify(loader.moduleInfo), 'utf8');

console.log('JS Loader meta written: ', out);
console.log('Version: ', Y.version);
console.log('./convert.php', Y.version);
