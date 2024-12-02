<?php
declare(strict_types=1);
// inlcude does not stop the execution of the script if the file is not found
// require stops the execution of the script if the file is not found
// require_once and include_once are used to include the file only once 
    #include_once 'random.php';

    // if you include or require the same file multiple times it will run the file multiple times
    #require 'switch.php';
    #require 'switch.php';
    #echo 'Hello World!';

// php.ini file is the configuration file for PHP
// https://www.php.net/manual/en/ini.list.php
// ini_get();
// ini_set();
// if it says ini_perdir or ini_system it means that it can not be changed in the script

// error handeling
// trigger_error('example error', E_USER_WARNING);
// function errorHandler(int $type, string $msg, ?string $file, ?int $line)
// {
//     echo "$type: $msg in $file on line $line";
//     exit;
// }

// set_error_handler('errorHandler', E_ALL);
// echo $z;

echo 'hello world it works from localhost';
