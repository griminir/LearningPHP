<?php
declare(strict_types=1);
//return

// function add($a, $b) {
//     $z = $a + $b;
//     return $z;
// }

// return in the main code outside of a function will stop the script

// declare - ticks // does not have to many uses
// maybe benchmarking or debugging

function onTick() {
    echo 'tick<br>';
}

register_tick_function('onTick');

declare(ticks=3);

$i = 0;
$length = 10;

while ($i < $length) {
    echo $i++ . '<br>';
}

// declare - strict_types // makes sure the types are correct
// bacically turns it into a strongly typed language
// must be the first statement in the script
// only works for the file it is in
function sum(int $a, int $b) {
    return $a + $b;
}