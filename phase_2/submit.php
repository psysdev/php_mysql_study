
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = trim($_POST["first_name"] ?? "");
    if (trim($name) !== ""){
    //moved the db connect code block into the conditional so connection isn't 
    //established simply when the form is accessed!  
    $dsn = "mysql:host=localhost;dbname=practice";
    $pdo = new PDO($dsn,"practice_user","");

    $query = "INSERT INTO STUDENTS (first_name) VALUES (:first_name)";
    $statement = $pdo->prepare($query);

        echo "We received: ". htmlspecialchars($name) . "<br>";


        $statement->execute([":first_name"=>$name]);
        echo "student saved  successfully!";
    }
    else {
        echo "Enter a valid name..";
    }
}
?>