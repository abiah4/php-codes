<?php 

class Coffee {
    public $name;
    public $price;
    public $description;

    public function __construct($name, $price , $description)
    {

        $this->name = $name;
        $this ->price = $price;
        $this ->description = $description;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getDescription(){
        return $this->description;
    }

    public function getDetails()
{
    return [
        'name' => $this->name,
        'price'=> number_format($this->price, 2),
        'description' => $this->description,
    ];
}

}

class CoffeeShop {
    public $coffees;

    public function Addcoffee(coffee $coffee){
        $this->coffees[] = $coffee;
    }
    public function getCoffees(){
        return $this->coffees;
    }
}

$coffeeShop = new CoffeeShop();

$coffeeShop->addcoffee(new coffee('Espresso', 2.40, 'Strong and bold Coffee.'));
$coffeeShop->addcoffee(new coffee('Latte', 3.40, 'Smooth and creamy Coffee with milk.'));
$coffeeShop->addcoffee(new coffee('Cappuccino', 3.50, 'Frothy coffee with steamd milk and foam.'));
$coffeeShop->addcoffee(new coffee('Americano', 1.80, 'Espresso with hot water.'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
            color: #555;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 20px 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        h3 {
            margin: 0;
        }

        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Coffee Shop!</h1>
        <h2>Menu</h2>
        <ul>
            <?php foreach ($coffeeShop->getCoffees() as $coffee): ?>
                <li>
                    <h3><?php echo $coffee->getName(); ?> - $<?php echo $coffee->getPrice(); ?></h3>
                    <p><?php echo $coffee->getDescription(); ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>