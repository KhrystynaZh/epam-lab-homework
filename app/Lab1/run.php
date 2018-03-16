<?php

namespace Lab1;

$order = new Order(new Client(2, 'dfgdfgsdfg', '12345678'), true);

$order->addProduct(new Flower('Rose', 10, 'fff', true), 45)
    ->addProduct(new Vase('Venus', 20, 10, 20), 25);

$store = new Store('Hjhkh', 'dhfgsjdg');

dd($store->handleOrder($order));
