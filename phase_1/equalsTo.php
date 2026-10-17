<?php
    $num = 5;
    $str = "5";

    echo ($num == $str) ? " True " : " False ";
    echo " via loose  juggling / comparison  (auto type conversion!)";
    echo ($num === $str) ? " True " : " False ";
    echo " via strict comparison(value and datatype check!)"
?>