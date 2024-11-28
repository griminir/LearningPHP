<?php

// while loop - checks condition before executing
$counter = 0;
while ($counter < 10) {
    echo $counter . '<br>';
    $counter++;
}

// do while loop -  executes at least once
$counter = 0;
do {
    echo $counter . '<br>';
    $counter++;
} while ($counter < 10);

// for loop - best for iterating over a range
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

// to avoid unnecessary functions calls you can use a variable
$array = [1, 2, 3, 4, 5];
// you can also put the length variable outside the loop
for ($i = 0, $length = count($array); $i < $length ; $i++) {
    echo $array[$i] . '<br>';
}


// foreach loop - best for iterating over arrays and objects
$programminglanguages = ['php', 'javascript', 'python', 'java', 'c#'];
foreach ($programminglanguages as $key => $language) {
    echo $key . ': ' . $language . '<br>';
}

echo $language; // this will print the last value of the array
// so its smart to unset the variable after the loop aka destroy it
unset($language);
echo '<br>';

$user = [
    'name' => 'timmy',
    'age' => 30,
    'programminglanguages' => ['php', 'javascript', 'python', 'java', 'c#'],
];

foreach($user as $key => $value) {
    echo $key . ': ' . json_encode($value) . '<br>';
};

// or if it's an array
// the : is the same as { and the endforeach is the same as }
foreach($user as $key => $value):
    if (is_array($value)) {
        echo $key . ': ' . implode(', ', $value) . '<br>';
    } else {
        echo $key . ': ' . $value . '<br>';
    }
endforeach;
