<?php
declare(strict_types=1);

// not recommended but nice to know
function foo(): void {
    function bar(): void {
        echo 'Hello World from bar';
    }
    echo 'Hello World from foo';
};

// bar();
foo();
bar();

// ? means that the function can return null
// mixed means that the function can return any type
function timmy(): ?string {
    return null;
}

$name = timmy();

echo $name;

// ...$numbers is a variadic parameter that accepts any number of arguments
function fooMath(int|float $x, int|string $y = 10, int|float ...$numbers): float {
    return $x * $y * array_sum($numbers);
};
$numbersArray = [5, 4, 3, 2, 1, 2];

echo fooMath(5.0, 10, ...$numbersArray);

// 8.0 named arguments
function fooMath2(int $x, int $y, int $z): int {
    return $x + $y - $z;
}

echo fooMath2(y: 10, x: 5, z: 15);

// scope
$fooGlobal = 'foo';

function scope3(): string {
    // this now a reference to the global variable
    // any changes to $fooGlobal inside the function will be reflected in the global variable
    // but only if this function is called first
    global $fooGlobal;
    $fooGlobal = 'fooLocalChange';
    return $fooGlobal;
}
// echo scope3();
echo $fooGlobal;
echo $GLOBALS['fooGlobal']; // $GLOBALS is a superglobal using the variable name as the key
// try and not use superglobals and global makes code harder to read
// use parameters and return values instead

// static variables kinda like a cache
function getValue(): int {
    static $value = null;
    if($value === null) {
        $value = expensiveFuntion();
    }
    // do something to the value
    return $value;
}

function expensiveFuntion(): int {
    sleep(2);
    echo 'This is an expensive function'; // this will only be called once because of the static variable
    return 10;
};

echo getValue() . '<br>';
echo getValue() . '<br>';
echo getValue() . '<br>';