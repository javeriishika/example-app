<?php
function fibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    
    if ($n > 0) {
        echo $fib[0] . " ";
    }

    if ($n > 1) {
        echo $fib[1] . " ";
    }

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        echo $fib[$i] . " ";
    }
}

// Change the number to the desired length of the Fibonacci series
$length = 10;

echo "Fibonacci Series for the first $length numbers: ";
fibonacci($length);
?>

