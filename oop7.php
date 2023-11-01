<?php

class MathUtils {
    // Static property to keep track of the total number of additions made
    private static $totalAdditions = 0;

    // Static method to add two numbers and update the total additions count
    public static function add($a, $b) {
        self::$totalAdditions++; // Increment the count of additions
        return $a + $b; // Return the sum of the numbers
    }

    // Static method to retrieve the total number of additions made
    public static function getTotalAdditions() {
        return self::$totalAdditions;
    }
}

// Perform additions using the MathUtils class
$result1 = MathUtils::add(5, 3);
$result2 = MathUtils::add(10, 20);

// Get the total number of additions made
$totalAdditions = MathUtils::getTotalAdditions();

// Display the results and total additions count
echo "Result 1: $result1\n";
echo "Result 2: $result2\n";
echo "Total additions made: $totalAdditions\n";

