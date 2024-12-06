<?php
    $x = [0, 1, 2, 0, 3, 0, 4];
    $x = array_filter($x, fn($value) => $value != 0);
    $x = array_merge($x, array_fill(0, 3, 0));
    print_r($x);
?>
