<?php
// Joseph Igama, Dana Clemmer
// Date: 01/15/2021
// File URL: http://jigama.greenriverdev.com/pp2/index.php


//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("functions.php");

echo "<h1>PHP Array Practice</h1>";

$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);

largest($numbers);

removeDups($numbers);