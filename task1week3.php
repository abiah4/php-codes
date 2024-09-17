<?php
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

?>