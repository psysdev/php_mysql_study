<?php
    $price = 5000;
    $taxRate = 0.18;
    $product = "Laptop";

    echo "price :".$price ." tax @ ".$taxRate." final amount:".($price+($price*$taxRate))." for product: ".$product;
?>