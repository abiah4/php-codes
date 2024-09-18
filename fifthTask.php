<?php
//Write a PHP class called 'Shape' with an abstract method 'calculateArea
abstract class Shape{
abstract public function calculateArea();


}

class Triangle extends Shape{
    private $base;
    private $height;

    public function __construct($base,$height){
        $this->base = $base;
        $this->height = $height;
    }
    public function calculateArea(){
        return 0.5 * $this->base * $this->height;
    }
}
class Rectangle extends Shape{
    private $width;
    private $height;

    public function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->width * $this->height;
    }
}

$triangle = new Triangle(5,7);
$rectangle = new Rectangle(6,4);

echo "Triangle area: " . $triangle->calculateArea() ."\n";
echo "rectangle area: " . $rectangle->calculateArea() ."\n";
echo "\n";

//Write a PHP abstract class called 'Animal' with abstract methods like 'eat()' 

abstract class Animal {
  abstract public function eat();
  abstract public function makeSound();
} 

class Dog extends Animal {
  public function eat(){
    echo "Dog is eating.\n";
  }
  public function makeSound(){
    echo "Dog is barking.\n";
  }
}

class Cat extends Animal {
  public function eat(){
    echo "Cat is eating.\n";
  }
  public function makeSound(){
    echo "Cat is mewoing\n";
  }
}

class Bird extends Animal{
  public function eat(){
    echo "Bird is eating.\n";
  }
  public function makeSound(){
    echo "Bird is chirping.\n";
  }
}

$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

$dog->eat();
$dog->makeSound();
$cat->eat();
$cat->makeSound();
$bird->eat();
$bird->makeSound();

?>