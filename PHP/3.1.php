<?php
	percent(100000, 12, 36);
	function percent($summa, $srok, $percent){
    	$otvet = $summa + ($summa * ($percent/100) / 12 * $srok);
        echo $otvet;
    }
?>