<?php
$num1 = 10;
$num2 = 5;
$operation = "^"; // Could be +, -, *, /, ^, %, sqrt

switch ($operation) {
    case "+":
        echo $num1 + $num2;
        break;
    case "-":
        echo $num1 - $num2;
        break;
    case "*":
        echo $num1 * $num2;
        break;
    case "/":
        echo $num1 / $num2;
        break;
    case "^":
        echo pow($num1, $num2);
        break;
    case "%":
        echo $num1 % $num2;
        break;
    case "sqrt":
        echo sqrt($num1);
        break;
    default:
        echo "Invalid operation";
}
?>