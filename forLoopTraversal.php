<?php
    $rollCall = ["Kim","Jenny","Krista"];
    // for ($i = 0; $i < count($rollCall);$i++){
    //     echo "<h2>Roll Call: $rollCall[$i]</h2";
    // }
?>
<ul>
    <?php
        foreach ($rollCall as $name) :
    ?>
    <li><?php echo $name; ?></li>
    <?php endforeach; ?>
</ul>