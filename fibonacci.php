<?php
function generateFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Change the number of terms as needed
$terms = 10;
$fibonacciSequence = generateFibonacci($terms);

echo "Fibonacci sequence of the first $terms terms:\n";
foreach ($fibonacciSequence as $number) {
    echo $number . " ";
}
?>

