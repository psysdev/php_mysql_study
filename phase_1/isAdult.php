<?php 
    function isAdult($age){
        if ($age < 18){
            return false;
        }
        else{
            return true;
        }
    }
    $inp = 17;
    echo isAdult($inp) ? "User is an adult." : "User is not an adult!";
?>