<?php
$temp = 100; // Temperature to convert
$unit = "C"; // Unit 'C' for Celsius or 'F' for Fahrenheit

if ($unit == "C") {
    $converted_temp = ($temp * 9/5) + 32;
    echo "$temp Celsius is $converted_temp Fahrenheit.";
} elseif ($unit == "F") {
    $converted_temp = ($temp - 32) * 5/9;
    echo "$temp Fahrenheit is $converted_temp Celsius.";
} else {
    echo "Invalid unit.";
}
?>