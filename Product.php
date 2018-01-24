<?php
class Product
{
    public $name, $price; #Declaring properties for objects

    public function __construct($productName, $productPrice)
    {
        $this->name = $productName;
        $this->price = $productPrice;
    }
}
?>
