<?php 
    $array = [5,10,15,20,25];
    $filtered_array = array_filter($array,function($arr){
        if ($arr > 12){
            return $arr;
        };
    });
    var_dump($filtered_array);
?>