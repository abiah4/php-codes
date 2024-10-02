<?php

class Validation {
    public static function validateEmail($email){
        if(filter_var($email , FILTER_VALIDATE_EMAIL)){
            return "Email is valid";
        }
        return "Email is invalid";
    }

    public static function vaildatePassword($password){
        if(strlen($password) >= 8 && preg_match('/[A-Za-z]/' , $password)  && preg_match('/[0-9]/' , $password)){
            return "Password is valid";
        } 
        return "Password is invalid";
    }
     public static function vaildateField($field){
        if(!empty(trim($field))){
            return "Field is valid";

        }
        return "Field is invalid";
     }

}
echo Validation::validateEmail("example@gmail.com") . "\n";
echo Validation::vaildatePassword("Pass1234") . "\n";
echo Validation::vaildateField("") . "\n";

?>