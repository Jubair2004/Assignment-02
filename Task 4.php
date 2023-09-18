<?php
/* Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.
*/
function fibonacci($n) {
    $fib = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }

    return $fib;
}

function printFibonacci($count) {
    $fibonacciNumbers = fibonacci($count);

    echo "The first $count Fibonacci numbers: " . implode(", ", $fibonacciNumbers) . "\n";
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);