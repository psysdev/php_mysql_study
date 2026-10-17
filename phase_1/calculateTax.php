<?php 
    function calculate_tax($price){
        return $price * 0.18;
    }

    $laptop_price = 5000;
    echo "Price of laptop : $laptop_price, Tax on purchase: ".calculate_tax($laptop_price);
?>