<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $age = filter_input(INPUT_POST,"student_age",FILTER_VALIDATE_INT);
    IF ($age !== false && $age !== null && $age >= 1 && $age <= 120 ){
    $dsn = "mysql:host=localhost;dbname=practice";
    $pdo = new PDO($dsn,"practice_user","");

    $query = "UPDATE STUDENTS SET age = :age WHERE first_name = 'Arkham'";
    $statement = $pdo->prepare($query);
    $statement->execute([":age"=>$age]);
    echo "Arkham's age insert: " . $age;
    }
}

?>