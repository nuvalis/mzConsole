#!/usr/bin/php
<?php

/* Define STDIN in case if it is not already defined by PHP for some reason */
if(!defined("STDIN")) {
define("STDIN", fopen('php://stdin','r'));
}


echo "hello" . "\n";
echo "test" . "\n";

echo print_r($_SERVER['argv']) ."\n\n\n\n";

echo "Hello! What is your name (enter below):\n";
$strName = fread(STDIN, 80); // Read up to 80 characters or a newline
echo 'Hello ' , $strName , "\n";