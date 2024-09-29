<?

class ShoppingCart {
    public $total = 0;

    public function addItem($price){
        $this->total += $price;
    }

    public function getTotal(){
        return $this->total;
    }
    public function displayTotal(){
        echo "Total cost: $" . $this->getTotal();
    }
}

$cart =new ShoppingCart();
$cart->addItem(20);
$cart->addItem(40);
$cart->displayTotal();


?>