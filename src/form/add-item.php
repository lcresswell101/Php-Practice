<?php

require __DIR__ . '/../bootstrap.php';

$item = $_POST['item'];
$quantity = $_POST['quantity'];

$basket = Basket::getInstance();

$itemFactory = new \Item\ItemFactory();

try {
    $newItem = $itemFactory->buildItem($item);

    $basket->addItem($newItem, (int) $quantity);
} catch (Exception $exception) {

}


header('Location: /');

