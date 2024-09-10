<?php
function whatday($day){
    switch ($day){
        case 1:
            return "Monday";
            case 2;
            return "Teusday";
            case 3;
            return "Wednesday";
            case 4;
            return "Thursday";
            case 5;
            return "Friday";
            case 6;
            return "Saturday";
            case 7;
            return "Sunday";
            
            default:
                return "INVALID NUMBER";
    }
}

function dayif($NumberofDay){
    if ($NumberofDay == 1){
        return "Monday";
    }
    elseif($NumberofDay == 2){
        return "Teusday";
    }
elseif($NumberofDay == 3){
        return "Wednesday";
    }
    elseif($NumberofDay == 4){
        return "Thursday";
    }
    elseif($NumberofDay == 5){
        return "Friday";
    }
    elseif($NumberofDay == 6){
        return "Saturday";
    }
    elseif($NumberofDay == 7){
        return "Sunday";
    } else {
        return "INVALID NUMBER";
    }
}

$testDay = 4;
echo dayif($testDay);
$testDay = 8;
echo whatday($testDay); 
	  
?>