<h1><?php echo $greeting; ?></h1>
<ul>
    <?php 
        foreach ($books as $book):
    ?>
        <li><?php echo $book; ?></li>
        <?php endforeach; ?>
</ul>