<?php

// inlcude does not stop the execution of the script if the file is not found
// require stops the execution of the script if the file is not found
// require_once and include_once are used to include the file only once 
    #include_once 'random.php';

    // if you include or require the same file multiple times it will run the file multiple times
    #require 'switch.php';
    #require 'switch.php';
    #echo 'Hello World!';