<?php
$number = -3;

if ($number > 0) {
    echo "Positive ";
    if ($number % 2 == 0) {
        echo "and Even.";
    } else {
        echo "and Odd.";
    }
} elseif ($number < 0) {
    echo "Negative ";
    if ($number % 2 == 0) {
        echo "and Even.";
    } else {
        echo "and Odd.";
    }
} else {
    echo "Zero.";
}
?>