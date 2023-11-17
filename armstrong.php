<?php

function isArmstrong($number) {
    $originalNumber = $number;
    $sum = 0;
    $numDigits = strlen($number);

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }

    return $sum === $originalNumber;
}

function printArmstrongNumbers($start, $end) {
    echo "Armstrong numbers between $start and $end are:\n";

    for ($i = $start; $i <= $end; $i++) {
        if (isArmstrong($i)) {
            echo $i . "\n";
        }
    }
}

// Example: Print Armstrong numbers between 1 and 1000
printArmstrongNumbers(1, 1000);

?>

