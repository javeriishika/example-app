<?php

/**
 * Class Practical
 * Contains static functions for various practical tasks.
 */
class Practical
{
    /**
     * Prints "Hello, World!"
     */
    public static function printHello()
    {
        echo "Hello, World!\n";
    }

    /**
     * Adds two numbers.
     *
     * @param int|float $num1 The first number.
     * @param int|float $num2 The second number.
     *
     * @return int|float The sum of two numbers.
     */
    public static function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Generates a Fibonacci sequence.
     *
     * @param int $n The number of elements in the Fibonacci sequence.
     *
     * @return array The Fibonacci sequence.
     */
    public static function generateFibonacciSequence($n)
    {
        $fibonacciSequence = [];

        if ($n <= 0) {
            return $fibonacciSequence;
        }

        $fibonacciSequence[] = 0;
        if ($n > 1) {
            $fibonacciSequence[] = 1;
        }

        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }

        return $fibonacciSequence;
    }
}

?>

