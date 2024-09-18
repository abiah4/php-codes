<?php
//Write a PHP class called 'Shape' with an abstract method 'calculateArea
interface Resizeable{
    public function resize($factor);
}

class Square implements Resizeable{
    private $sideLength;

    public function __construct($sideLength){
        $this->sideLength = $sideLength;
    }
public function getArea(){
    return $this->sideLength * $this->sideLength;
}
public function resize($factor){
    if($factor <= 0){
        throw new Exception('Resize factor must be positive');
    }
    $this->sideLength *= $factor;
}
public function getSideLength(){
    return $this->sideLength;
}

}

$square = new Square(4);

echo "Intial side length: " . $square->getArea() . "\n";

$square->resize(2);
echo "Resized side length: " . $square->getSideLength() . "\n";

echo "Area: " . $square->getArea() . "\n";

//Write a class called 'Product' with properties like 'name' and 'price'
interface Comparable {
    public function compare($other);
}
 
class Product implements Comparable {
    private $name;
    private $price;

    public function __construct($name , $price){
        $this->name = $name;
        $this->price = $price;

    }

    public function getName(){
        return $this->name;
    }

    public function compare($other){
        return $this->price <=> $other->price;
    }
}

$product1 = new Product("Desktop ", 1000);
$product2 = new Product("Laptop ", 1000);

$comparison = $product1->compare($product2);

if($comparison > 0){
    echo $product1->getName() . "is more expensive than " . $product2->getName();
} elseif ($comparison < 0){
    echo $product1->getName() . "is cheaper than " . $product2->getName();
} else {
    echo $product1->getName() . "is equal in price to " . $product2->getName();
}

?>