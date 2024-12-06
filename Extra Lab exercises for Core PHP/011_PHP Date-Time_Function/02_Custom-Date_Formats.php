<?php
// Get current date
$current_date = new DateTime();

echo "Y-M-D format: " . $current_date->format('Y-M-D') . "<br>";

echo "D/M/Y format: " . $current_date->format('d/m/Y') . "<br>";

echo "1, F JS Y format: " . $current_date->format('j, F jS Y') . "<br>";
?>
