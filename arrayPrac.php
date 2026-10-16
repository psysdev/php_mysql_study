<?php
    $studentList = ["Aasha","Arnav","Abhay"];
    foreach ($studentList as $student){
        echo $student. " ";
    }
    $majorSubject = [
        "name" => "Maths",
        "specialisation" => "discrete maths",
        "alternative" => "engineering maths"
    ];
    foreach ($majorSubject as $key => $values){
        echo " | ".$key . " : " . $values . " | ";
    }
    $passStatus = ["passed","passed","repeater"];
    for ($i = 0; $i < count($passStatus); $i++){
        echo $passStatus[$i] . " ";
    }
?>