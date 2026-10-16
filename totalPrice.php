<?php
    $price = 1000;
    require "taxRate.php";
    echo "Total Price: " . ($price + taxRate($price));
?>