<?php
$price = 600;
$discount = ($price > 500) ? $price * 0.10 : 0;
echo "Discount: " . $discount . ", Final Price: " . ($price - $discount);
?>
