<?php
$arr = [5, 2, 8, 1, 3];
sort($arr);
print_r($arr); // Ascending order

rsort($arr);
print_r($arr); // Descending order

$array_associative = ["apple" => 3, "banana" => 1, "cherry" => 2];
asort($array_associative); 
ksort($array_associative); 
print_r($array_associative);
?>
