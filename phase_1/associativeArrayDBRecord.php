<?php
    $laptop = [
        "brand" => "loq",
        "id" => 2024,
        "in_stock"=> true
    ];
?>
<h1>Laptop stock: <?php echo $laptop["in_stock"] ? 'In Stock' : 'Out of Stock'; ?></h1>