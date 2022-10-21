<?php
 clock(3, 15);
 function clock($hour, $minute){
 	$otvet = ((30 * $hour) + (30 * ($minute / 60))) - ($minute * 6);
    echo $otvet;
 }
?>