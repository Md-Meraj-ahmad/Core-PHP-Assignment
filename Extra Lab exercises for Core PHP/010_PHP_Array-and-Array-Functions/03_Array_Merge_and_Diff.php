<?php
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];

$merged = array_merge($array1, $array2);
print_r($merged);

$diff = array_diff($array1, $array2);
print_r($diff);
?>