<?php
class Product
{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getCost()
    {
        return $this->price * $this->quantity;
    }
}

class Cart
{
    private $products = [];

    public function add($product)
    {
        $this->products[] = $product;
    }
    public function getCart()
    {
        return $this->products;
    }
    public function remove($name)
    {
        foreach($this->products as $index => $object)
        {
            if($object->getName() === $name)
            {
                unset($this->products[$index]);
            }
        }
    }
    public function getTotalCost()
    {
        $sum = 0;
        foreach($this->products as $index => $object)
        {
            $sum += $object->getCost();
        }
        return $sum;
    }
    public function getTotalQuantity()
    {
        $sum = 0;
        foreach($this->products as $index => $object)
        {
            $sum += $object->getQuantity();
        }
        return $sum;
    }
    public function getAvgPrice()
    {
        return $this->getTotalCost()/ $this->getTotalQuantity();
    }
}

$product1 = new Product('sugar', 25, 10);
$product2 = new Product('meat', 250, 5);
$cart = new Cart;
$cart->add($product1);
$cart->add($product2);


echo '<pre>';
print_r($cart->getCart());
echo '</pre>';

echo $cart->getTotalCost();
echo '<br>';
echo $cart->getTotalQuantity();
echo '<br>';
echo $cart->getAvgPrice();

$cart->remove('sugar');

echo '<pre>';
print_r($cart->getCart());
echo '</pre>';