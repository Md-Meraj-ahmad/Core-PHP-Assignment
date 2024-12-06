<?php
$products = [ 
    ["name" => "Product 1", "price" => 100, "stock" => 50], 
    ["name" => "Product 2", "price" => 200, "stock" => 30], 
    ["name" => "Product 3", "price" => 150, "stock" => 20] 
];
echo ""; echo "NamePriceStock";
foreach ($products as $product) { 
    echo "" . $product['name'] . "" . $product['price'] . "" . $product['stock'] . ""; 
}
echo ""; 
?>

