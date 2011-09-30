IMPORTANT NOTE
==============

THE METADATA USED IN YUI 3 HAS CHANGED AS OF VERSION 3.4.0, THIS LOADER WILL
NOT WORK IN IT'S CURRENT STATE WITH ANY VERSION OVER 3.3.0. IT NEEDS TO BE
MODIFIED TO HANDLE THE NEW ALIAS SYSTEM IN ORDER TO FUNCTION PROPERLY.

PULL REQUESTS ARE WELOME!


The YUI PHP Loader Utility is a server-side utility that allows you to 
load specific YUI components and their dependencies into your page via PHP.
YUI PHP Loader can operate as a holistic solution by loading all of your 
necessary YUI components, or it can be used to add one or more components 
to a page on which some YUI content already exists.

phploader requires a webserver with support for PHP 4.3.0+ or PHP 5+.

The code for YUI phploader is provided under a BSD license:
    http://developer.yahoo.net/yui/license.html

Project home page:
    http://developer.yahoo.com/yui/phploader
Source code:
    http://github.com/yui/phploader

Issue tracker:
    http://yuilibrary.com/projects/phploader


Files
-----

README.md
    This file

CHANGES
    The change log

INSTALL
    Installation instructions

BUILD.md
    Instructions for building meta data

license.txt
    Open source license details.

lib/meta
    Contains the YUI module dependency metadata (for versions 2 and 3).
    The latest version is shipped with each release, but you can manually
    add additional version.

phploader/loader.php
    The main YUI PHP Loader class file

phploader/combo.php
    Local lightweight combo handling service that will allow PHP Loader to 
    combine files without relying on a remote combo-service.

phploader/tests
    Contains a number of tests and example loader scripts

examples
    Contains YUI PHP Loader example documentation and working code samples

api_docs
    Contains the standard YUI API style documentation

scripts
    Scripts to build meta-data
