<?php
function factorial_iterative($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

echo "Factorial of 5 (Iterative): " . factorial_iterative(5) . "<br>";
?>
Recursive Factorial
<?php
function factorial_recursive($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial_recursive($n - 1);
    }
}

echo "Factorial of 5 (Recursive): " . factorial_recursive(5) . "<br>";
?>
