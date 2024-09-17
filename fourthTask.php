<?php
//Write a PHP class 'Rectangle' that has properties for length and width. Implement methods to calculate the rectangle's area and perimeter. 
class Rectangle{
public $length;
public $width;
 public function __construct($length,$width){
     $this->length = $length;
     $this->width = $width;
 }
public function getArea(){
    return $this->length * $this->width;
}
public function getPerimeter(){
    return 2 * ($this->length + $this->width);
}

public function display(){
    echo "AREA: " . $this->getArea() ."<br>";
     echo "PERIMETER: " . $this->getPerimeter();

}

}

$result =  new Rectangle(12,9);
$result->display();

//Write a PHP class that calculates the factorial of an integer.
class Factorial{
    public $number;
    
    public function __construct($number){
        if($number< 0){
            throw new Exception('number must be integer');  
            //try,catch,throw
        }
        $this->number = $number;
    }
    
    public function calculate(){
        $factorial = 1;
        for ($i = 2; $i <= $this->number; $i++){
            $factorial *= $i;
        }
        return $factorial;
    }
    public function display(){
        echo "Factorial of " . $this->number . " is " . $this->calculate();
    }
}

try {
    $number = -8;
    $factorial = new Factorial($number);
    $factorial->display();
}
catch(Exception $E){
    echo"error: ". $E->getMessage();
}

//Calculate the difference between two dates using PHP OOP approach.
class DateDIFF{
public $startDate;
public $endDate;

public function __construct($startDate,$endDate){

    $this->startDate = new DateTime($startDate);
    $this->endDate = new DateTime($endDate);
}

public function calculateDiff(){

    $time = $this->startDate->diff($this->endDate);

    $formatTime = sprintf(
        'Difference: %d years , %d months , %d days',
        $time->y,
        $time->m,
        $time->d
    );

    return $formatTime;
}

}

$startDate = "1999-09-03";
$endDate = "2017-09-04";

$calucate = new DateDIFF($startDate,$endDate);
echo $calucate->calculateDiff();

?>