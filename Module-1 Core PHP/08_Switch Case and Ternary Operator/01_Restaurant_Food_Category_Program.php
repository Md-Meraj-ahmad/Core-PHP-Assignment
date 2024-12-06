<?php
    $foodCategory = "Dessert";
    switch ($foodCategory) {
        case "Starter":
        echo "Salad";
        break;
        case "Main Course":
        echo "Pasta";
        break;
        case "Dessert":
        echo "Cake";
        break;
        default:
        echo "Invalid category";
    }
?>
