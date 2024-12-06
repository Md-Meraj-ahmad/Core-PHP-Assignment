<?php
$x = [1, 2, 3, 4, 5, 6, 7];
    $odd = 0;
        $even = 0;
        foreach ($x as $num){
            if ($num % 2 == 0) {
                $even++;
            }else{
                $odd++;
            }
        }
    echo "Odd: $odd, Even: $even";
?>