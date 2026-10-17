<h1>Welcome to my app!</h1>
<?php 
    $user = 'Aakash Singh';
    $loggedIn = true;
?>
<p>User : <?php if($loggedIn) { echo $user; } else{ echo "Not logged in";} ?></p>