<?php
function myGrade($marks){
    switch (True){
        case ($marks >= 60):
            return "You are in the First Division";
            case ($marks >= 45):
            return "You are in the Second Division";
            case ($marks >= 33):
            return "You are in the Third Division";
            default:
                return "You Fail";
    }
}

$testGrade = 20;
echo myGrade($testGrade);



function Gradeif($grade){
    if ($grade >= 60){
        return "You are in the First Division";
    }
    elseif($grade >= 45){
        return "You are in the Second Division";
    }
elseif($grade >= 33){
        return "You are in the Third Division";
    } else {
        return "You Fail";
    }
}


$testG = 66;
echo Gradeif($testG); 
	  
?>