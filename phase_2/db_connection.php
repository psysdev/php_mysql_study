<?php
//we use pdo instead of the older mysqli (pdo supports mysql  postgresql
//sqlite etc with minimal 1 line changes!)

// We first need the DSN (DSN contains the database type, host and database name)
$dsn = "mysql:host=localhost;dbname=practice";
$username="practice_user";
$password="";
try{
    // PDO object is created , "new" keyword is required when creating objects
    $pdo = new PDO($dsn,$username,$password);
    echo "connected successfully!";
} catch (PDOException $e){
    echo "connection failed!" . $e->getMessage();
}
?>