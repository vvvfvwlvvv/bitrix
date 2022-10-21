<?php
	NormalDate(3, 12);
	function NormalDate($month, $day){
    	switch($month){
        case 1:
            $monthq = "Января";
            break;
    	case 2:
            $monthq = "Февраля";
            break;
    	case 3:
            $monthq = "Марта";
            break;
        case 4:
            $monthq = "Апреля";
            break;
        case 5:
            $monthq = "Мая";
            break;
        case 6:
            $monthq = "Июня";
            break;
        case 7:
            $month = "Июля";
            break;
        case 8:
            $monthq = "Августа";
            break;
        case 9:
            $monthq = "Сентября";
            break;
        case 10:
            $monthq = "Октября";
            break;
        case 11:
            $monthq = "Ноября";
            break;
        case 12:
            $monthq = "Декабря";
            break;
        }
        echo "{$day} {$monthq}";
    }
?>