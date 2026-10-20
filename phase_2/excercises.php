//Exercise 1: Write the PHP code to create a $dsn string for a MySQL
//database running on localhost with the database name school_db.
<?php 
$dsn = "mysql:host=localhost;dbname=school_db";
//Exercise 2: Instantiate a new PDO connection using that $dsn, a username of 
//admin, and a password of secret123.
$pdo = new PDO($dsn,"admin","secret123");
//Exercise 3 (Conceptual Review): In Java, if you have an object student and want
//to call its getName() method, you write student.getName(). If $student is an 
//object in PHP, what is the exact syntax you would write to call that same
//method?

//The syntax would be student->getName();
?>