Building YUI 3 Metadata
-----------------------

There are two scripts located in the `scripts` directory.

   * `export_modules.js`
        This script converts Loader metadata into a JSON text file that is to be parsed by `convert.php`
   * `convert.php`
        Converts the JSON loader structure into a php JSON structure


Building
========

   * Download an official release from here: http://yuilibrary.com/download/yui3/
   * Clone this repo: `git clone git://github.com/yui/phploader.git`
   * Unzip the release as a sibling to the loader clone
   * `cd phploader`
   * `./scripts/export_modules.js`
      * This will print the version
   * `./scripts/convert.php <Version>`

