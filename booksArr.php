<?php
    $arr = ["To dream a lie","To speak a sin","To be a delusion"];
?>    
<ul>
    <?php    foreach ($arr as $book): 
            echo "<li> Book Title : $book </li>";  
        endforeach;
    ?>
</ul>
