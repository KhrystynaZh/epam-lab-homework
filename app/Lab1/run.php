<?php

namespace Lab1;

$store = new Store('Presents', 'Plastova Str. 2');
$stock = new Stock('Stock1');

$income = new Income(5, '2018-03-15');

$rose = new Flower('Rose', 7, 'red', true);
$vase = new Vase('Saturn', 15, 10, 20);
$sweet = new Sweet('Cow', 5, 'Roshen', 'chocolate');

$income->addProduct($rose, 100, $stock)
    ->addProduct($vase, 75, $stock)
    ->addProduct($sweet, 200, $stock);

$order = new Order(new Client(10, 'Zelena Str. 1', '12345678'), true);

$order->addProduct($stock, $rose, 199);
$order->addProduct($stock, $vase, 75);
$order->addProduct($stock, $sweet, 200);


dd($stock, $store->handleOrder($order));
