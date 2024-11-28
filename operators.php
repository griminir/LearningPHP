<?php

// arithmetic operators (+ - * / % **)
$x = 10;
$y = 3;

var_dump($x + $y); // 13
echo '<br>';
var_dump($x - $y); // 7
echo '<br>';
var_dump($x * $y); // 30
echo '<br>';
var_dump($x / $y); // 3.3333333333333
echo '<br>';
var_dump($x % $y); // 1
echo '<br>';
var_dump($x ** $y); // 1000
echo '<br>';

// assignment operators (= += -= *= /= %= **=)
$z = 5;
$z += 5; // $z = $z + 5;
var_dump($z); // 10
echo '<br>';
$z -= 5; // $z = $z - 5;
var_dump($z); // 5
echo '<br>';
$z *= 5; // $z = $z * 5;
var_dump($z); // 25
echo '<br>';
$z /= 5; // $z = $z / 5;
var_dump($z); // 5
echo '<br>';
$z %= 5; // $z = $z % 5;
var_dump($z); // 0
echo '<br>';
$z **= 5; // $z = $z ** 5;
var_dump($z); // 0
echo '<br>';

// string operators (. .=)
$firstname = 'timmy';
$lastname = 'turner';

var_dump($firstname . ' ' . $lastname); // timmy turner
echo '<br>';
$firstname .= ' ' . $lastname;
var_dump($firstname); // timmy turner
echo '<br>';

// comparison operators (== === != !== > < >= <= <> <=>)
$score = 75;
$highscore = 100;

var_dump($score == $highscore); // false
echo '<br>';
var_dump($score === $highscore); // false
echo '<br>';
var_dump($score != $highscore); // true
echo '<br>';
var_dump($score !== $highscore); // true
echo '<br>';
var_dump($score > $highscore); // false
echo '<br>';
var_dump($score < $highscore); // true
echo '<br>';
var_dump($score >= $highscore); // false
echo '<br>';
var_dump($score <= $highscore); // true
echo '<br>';
var_dump($score <> $highscore); // true
echo '<br>';
var_dump($score <=> $highscore); // -1
echo '<br>';

// ternary operator (condition) ? true : false //  ?? null
$completed = true;
$stuff = null;
$checkForNull = $stuff ?? 'default value'; // if $stuff is null, use 'default value' else use $stuff
var_dump($completed ? 'completed' : 'not completed'); // completed
echo '<br>';

// error control operator @
// suppresses error messages from being displayed
// use with caution
$f = @file('foo.txt');// this will show an error message


// increment / decrement operators (++ --)
$score = 75;
$score++; // $score = $score + 1; post increment
$score--; // $score = $score - 1; post decrement
--$score; // $score = $score - 1; pre decrement
++$score; // $score = $score + 1; pre increment


// logical operators (&& || ! and or xor)
// php short circuits logical operators
$x = 10;
$y = 3;
 // ! before a variable will negate it
var_dump($x == 10 && $y == 3); // true
echo '<br>';
var_dump($x == 10 && $y == 4); // false
echo '<br>';
var_dump($x == 10 || $y == 4); // true
echo '<br>';
var_dump($x == 11 || $y == 4); // false
echo '<br>';


// bitwise operators (& | ^ ~ << >>) 
// ill come back to this later if its needed


// array operators (+ == != === !==)
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];
// only the keys from the first array are preserved
// if the second array has the same key, it will be ignored
$z = $x + $y; //  $z = ['a', 'b', 'c']
// == and === will only return true if the arrays have the same key value pairs
// if we use loose comparison ==, it will return true if the arrays have the same key value pairs
// does not care about the order of the keys or data types
print_r($z);