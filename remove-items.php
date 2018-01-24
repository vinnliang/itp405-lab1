<?php

require('./ShoppingCart.php');
require('./Product.php');
require('./LineItem.php');

use Apple\iTunes\Checkout\ShoppingCart;
use Apple\iTunes\Checkout\LineItem;

$album = new Product ('Bright Soundtrack', 10.99);
$song = new Product ('Paint It Black', 0.99);
$show = new Product ('Friends Season 1', 29.99);

$shoppingCart = new ShoppingCart();

$lineItem1 = new LineItem($album, 1);
$lineItem2 = new LineItem($song, 1);
$lineItem3 = new LineItem($show, 1);

$shoppingCart->add($lineItem1);
$shoppingCart->add($lineItem2);
$shoppingCart->add($lineItem3);
echo "Before: ";
echo $shoppingCart->getTotal();
echo "<br>";
$shoppingCart->remove($album);
echo "After: ";
echo $shoppingCart->getTotal();


?>
