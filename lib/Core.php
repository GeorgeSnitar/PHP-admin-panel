<?php 
# (A) ERROR HANDLING - CHANGE  TO YOUR OWN
error_reporting(E_ALL & ~ E_NOTICE); # Sets which PHP errors are reported
ini_set("display_errors",1);
// ini_set("log_errors",1);
// ini_set("error_log","PATH/error.log");

// (B) DATABASE SETTINGS - CHANGE TO YOUR OWN
define("DB_HOST", "localhost");
define("DB_NAME", "test");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (C) URL
define("URL_HOST", "http://localhost/"); # CHANGE  TO YOUR OWN
define("URL_PUBLIC", URL_HOST . "public/");

// (D) FILE PATH
define("PATH_LIB", __DIR__ . DIRECTORY_SEPARATOR);
define("PATH_BASE", dirname(PATH_LIB) . DIRECTORY_SEPARATOR);


// (E) START SESSION
session_start();