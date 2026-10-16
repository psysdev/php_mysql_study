<?php
    $student = [
        "course" => "pgcp-ac",
        "name" => "psysdev",
        "year" => 2026,
        "batch" => "aug"
    ];
    print_r($student);

    echo $student['batch']; // no need to use curly brances to encapsulate the array variable
    var_dump($student);
?>