<?php
    for ($i = 0; $i < 8; $i++) {
        for ($j = 0; $j < 8; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "X ";
            } else {
                echo "O ";
            }
        }
    echo "<br>";
    }
?>
