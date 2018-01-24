<?php

namespace Apple\iTunes\Checkout;

class LineItem
{
    public $product, $quantity;

    public function __construct($product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getTotal()
    {
        #quantity * productPrice
        return $this->quantity * $this->product->price;
    }
}

?>
