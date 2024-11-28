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