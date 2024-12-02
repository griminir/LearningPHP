<?php

// link
// https://www.php.net/manual/en/ref.array.php
declare(strict_types=1);
function prettyPrintArray(array $array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

//args: the array, the number of chunks, preserve keys
prettyPrintArray(array_chunk($items, 2, true)); 

$array1 = ['a', 'b', 'c', 'd'];
$array2 = [5, 10, 15, 20];

//args: array1, array2 need to be the same length
prettyPrintArray(array_combine($array1, $array2));

$arrayNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// array_filter(array $array, callable $callback = null, int $mode = 0): array
// array_filter: filters the array based on the callback if no callback is provided it will remove all the falsey values
// array_filter_use_key: makes the callback filter to keys instead of values
// arrray_filter_use_both: makes the callback filter to keys and values, but needs to be even to use all 
$even = array_filter($arrayNumbers, fn($number) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);

// this will reindex the array
$even = array_values($even);
prettyPrintArray($even);

// array_keys (array $array, mixed $search_value = null, bool $strict = false): array
$keyArray = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];
$keys = array_keys($keyArray, 10);
prettyPrintArray($keys);

// array_map (callable|null $callback, array $array, array ...$arrays): array
// one array will preserve the keys, multiple arrays will not preserve the keys
// best to have the same length of arrays, the shorter array will be extended with empty elements
$arrayMultiplied = array_map(fn($number) => $number * 2, $arrayNumbers);
prettyPrintArray($arrayMultiplied);

// array_merge (array ...$arrays): array
// merges the arrays, if the keys are the same string keys the last value will be used
// numeric keys will be reindexed
$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = [4, 5, 6];
$array3 = ['d' => 4, 'b' => 5, 'f' => 6];
$merged = array_merge($array1, $array2, $array3);
prettyPrintArray($merged);

// array_reduce (array $array, callable $callback, mixed $initial = null): mixed
// reduce the array to a single value
$invoiceItems = [
['price' => 10.99, 'quantity' => 2, 'desc' =>  'item1'],
['price' => 5.99, 'quantity' => 3, 'desc' =>  'item2'],
['price' => 3.99, 'quantity' => 1, 'desc' =>  'item3']
]; 
$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + ($item['price'] * $item['quantity']), 0);
echo $total;

// array_search (mixed $needle, array $haystack, bool $strict = false): mixed
// case sensitive
// returns the first key of the value
// returns false if not found, careful with index 0 and false
$haystackArray = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];
$key = array_search('a', $haystackArray);
echo '<br>';

if ($key === false) {
    echo 'key not found';
} else {
    echo $key;
}

// array_diff (array $array, array ...$arrays): array
// returns the values that are not in the other arrays
$arrayA = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrayB = ['d' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$arrayC = ['l' => 3, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff($arrayA, $arrayB, $arrayC));
prettyPrintArray(array_diff_assoc($arrayA, $arrayB, $arrayC));
prettyPrintArray(array_diff_key($arrayA, $arrayB, $arrayC));

// some sorts
$unsortedArray = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2, 'e' => 51];
prettyPrintArray($unsortedArray);
asort($unsortedArray); // sort by value
prettyPrintArray($unsortedArray);
ksort($unsortedArray); // sort by key
prettyPrintArray($unsortedArray);
usort($unsortedArray, fn($a, $b) => $b <=> $a); // sort by callback this will sort in descending order
prettyPrintArray($unsortedArray);

// destructuring
[$first, $second, $third] = $arrayNumbers;
echo $first . $second . $third;
prettyPrintArray($arrayNumbers);