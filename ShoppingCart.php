<?php

namespace Apple\iTunes\Checkout;
use Product;
class ShoppingCart
{
  protected $items = [];
    #modifiers: Public/ Protected / Private
    public function add(LineItem $lineItem)
    {
        $this->items[] = $lineItem; #same as "array push"
    }

    public function getTotal()
    {
        $total = 0;

        foreach($this->items as $lineItem)
        {
            $total += $lineItem->getTotal();
        }
        return $total;
    }

    public function remove(Product $product)
    {
      $newItems = [];
      foreach($this->items as $lineItem)
      {
          if ($lineItem->product !== $product)
          {
              $newItems[] = $lineItem;
          }
      }
      $this->items = $newItems;
    }

    public function empty()
    {
      $this->items= [];
    }

}
?>
