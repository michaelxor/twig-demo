<?php

// build root dir
$dir = __DIR__;
$path_parts = explode(DIRECTORY_SEPARATOR, $dir);
array_pop($path_parts);
$root_dir = implode(DIRECTORY_SEPARATOR, $path_parts);


// some paths
define('ROOT', $root_dir);
define('INCLUDE_ROOT', ROOT . '/include');
define('VENDOR_ROOT', ROOT . '/vendor');
define('TEMPLATE_ROOT', ROOT . '/templates');


// register the autoloader that comes bundled with composer
require_once(VENDOR_ROOT . '/autoload.php');


// some handy functions
require_once(INCLUDE_ROOT . '/functions.php');


// initialize twig
require_once(INCLUDE_ROOT . '/twig.php');
