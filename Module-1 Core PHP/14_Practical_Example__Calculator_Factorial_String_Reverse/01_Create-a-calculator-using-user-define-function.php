<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Cannot divide by zero";
    } else {
        return $a / $b;
    }
}

echo "Addition: " . add(5, 3) . "<br>";
echo "Subtraction: " . subtract(5, 3) . "<br>";
echo "Multiplication: " . multiply(5, 3) . "<br>";
echo "Division: " . divide(5, 3) . "<br>";
?>
