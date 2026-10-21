<?php
$dsn = "mysql:host=localhost;dbname=practice";
$pdo = new PDO($dsn,"practice_user","practice");
$query = "SELECT * FROM BOOKS WHERE AUTHOR_NAME = :author";
$statement = $pdo->prepare($query);
$statement->execute([":author"=>"J.K Rowling"]);
$books = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<ul>
    <?php foreach ($books as $book): ?>
        <li> <?php echo "Book: " . $book["title"] ?></li>//made a silly error where i forgot $book is an array of itself and can't be echo'd.
    <?php endforeach; ?> //forgot the "php" in "left_arrow -> cant use the symbol here ?php"
</ul>