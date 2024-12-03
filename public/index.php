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

echo 'hello world it works from localhost' . '<br>';

// looking up for files in the current directory
// $dir = scandir(__DIR__);
// echo '<br>';
// var_dump($dir);

//mkdir('foo'); // creates a directory
// rmdir('foo'); // removes the directory
// just some file operations
// if (file_exists('foo.txt')) {
//     echo '<br>' . 'file exists';
//     echo filesize('foo.txt');
//     file_put_contents('foo.txt', 'Hello World');

//     // filesize is cached so it will not show the updated size
//     // https://www.php.net/manual/en/function.clearstatcache.php
//     clearstatcache(); // clears the cache

//     echo filesize('foo.txt');
// } else {
//     echo 'file does not exist';
// }

// https://www.php.net/manual/en/function.fopen.php
// https://www.php.net/manual/en/ref.filesystem.php

// error handeling for file
if (! file_exists('foo.txt')) {
    echo 'file not found';
    return;
}

$file = fopen('foo.txt', 'r');

while(($line = fgets($file)) !== false) {
    echo $line . '<br>';
}
fclose($file);