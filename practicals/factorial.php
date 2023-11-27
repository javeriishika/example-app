<?php
function calculateFactorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($number == 0) {
        return 1; // 0! is defined as 1
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

// Change the number for which you want to calculate the factorial
$number = 5;
$factorial = calculateFactorial($number);

echo "Factorial of $number is $factorial";
?>

