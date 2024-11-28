<?php

// variables
$firstname = 'timmy';

//constants
define('STATUS_PAID', 'paid');
const STATUS_JIM = 'jim';

//variable variable
$foo = 'bar';

$$foo = 'baz'; // $bar = 'baz';


// data types and type casting

# 4 scalar types
    # bool - true = 1 / false
    $completed = true;
        // integers 0, -0 = false
        // floats 0.0, -0.0 = false
        // strings '', '0' = false
        // arrays [] = false
        // null = false
    # int - 1, 3, 4, 2, 5, -1, 0 whole numbers
    $score = 75;
    # float - 1.5, 0.1, 0.005, - 15.8 numbers with a decimal
    $price = 0.99;
    # string "timmy", "hello world"
    $greeting = 'hello timmy';
        // heredoc - multi line string with variables
        $heredocexample = <<<WHATEVER
        hello world $firstname
        line 2
        line 3 ' " \ /
        WHATEVER;
        echo $heredocexample;
        echo '<br>';
        echo nl2br($heredocexample); // new line to break

        // nowdoc - multi line string without variables
        $nowdocexample = <<<'WHATEVER'
        hello world $firstname
        line 2
        line 3 ' " \ /
        WHATEVER;
        echo $nowdocexample;
        echo '<br>';
        echo nl2br($nowdocexample); // new line to break

    echo '<br>';
    echo $completed . '<br>';
    echo $score . '<br>';
    echo $price . '<br>';
    echo $greeting . '<br>';

    var_dump($completed); // prints what type of variable it is and the value
    echo gettype($completed); // prints the type of variable it is


# 4 compound types
    # array
    $randomtypes = [1, 'hello', 0.99, true];
    echo '<pre>';
    print_r($randomtypes); // prints the array
    echo '</pre>';
    // associative array
    $programminglanguages = ['php' => '8.0', 'javascript' => '?.?', 'python' => '3.9'];
    $programminglanguages['ruby'] = '?.?'; // adds to the end of the array
    array_push($randomtypes, 'timmy', 'ole'); // adds to the end of the array does not support associative arrays
    array_shift($randomtypes); // removes the first element of the array
    array_pop($randomtypes); // removes the last element of the array
    var_dump(isset($programminglanguages[0])); // checks if the index exists

    # object
    # callable
    # iterable

# 2 special types
    # resource
    # null - no value or nothing
    $nullstant = null;
    // null cast to string = ''
    // null cast to int = 0
    // null cast to bool = false
    // null cast to array = []
    var_dump($nullstant);