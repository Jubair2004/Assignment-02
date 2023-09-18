<?php
/* Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement
*/
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$count = 10;
$fibonacciNumbers = [];

for ($i = 0; $i < $count; $i++) {
    $fibonacciNumbers[] = fibonacci($i);

    if ($fibonacciNumbers[$i] > 100) {
        break;
    }
}

echo "The first 10 Fibonacci numbers (up to 100): " . implode(", ", $fibonacciNumbers);