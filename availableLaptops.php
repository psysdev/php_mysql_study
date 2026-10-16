<?php 
    // $laptops = [["brand"=>"ROG","available"=>true],
    //             ["brand"=>"LEGION","available"=>true],
    //             ["brand"=>"alienware","available"=>false]];
    // $available_laptops = array_filter($laptops,function($laptop){
    //     return $laptop["available"] === true;});
    // var_dump($available_laptops);
?>

<?php 
    $laptops = [["brand"=>"ROG","available"=>true],["brand"=>"LEGION","available"=>true],["brand"=>"ALIENWARE","available"=>false]];
    $availableLaptops = array_filter($laptops,function($laptop){
        return $laptop["available"] === true;
    });
    var_dump($availableLaptops);
?>