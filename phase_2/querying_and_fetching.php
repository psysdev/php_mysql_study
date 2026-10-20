<?php
$dsn = "mysql:host=localhost;dbname=practice";
$pdo = new PDO($dsn,"practice_user","");
$statement = $pdo->prepare("SELECT * FROM STUDENTS");
$statement->execute();
//if we do not expressively use "PDO::FETCH_ASSOC" with fetchAll() , we wind up
//fetching both normal array and associative array, resulting duping and memory
//wastage!
$students = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($students);
?>
<ul>
    <?php foreach ($students as $student) : ?>
        <li> <?php echo $student["first_name"] ?> </li>
    <?php endforeach; ?>
</ul>