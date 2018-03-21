<?php

namespace Lab2;

$store = new Store('IShop', 'Plastova Str. 2');

$laptop1 = new Product('laptop', 'Asus VivoBook Max 1', 9000);
$laptop2 = new Product('laptop', 'Asus VivoBook Max 2', 19000);
$dress = new Product('cloth', 'Dress', 200);
$doll = new Product('toy', 'Doll', 100);

$store->addProduct($laptop, 5)
    ->addProduct($dress, 10)
    ->addProduct($doll, 15);

$client = new Client(10, 'Zelena Str. 1', '12345678');

$basket = new Basket($client);
$basket->addProduct($store, $laptop, 1)
    ->addProduct($store, $dress, 2)
    ->addProduct($store, $doll, 3);

$productList = $store->getProducts();

$basketList = $basket->getProducts();

$amount = $store->getProductAmount($dress);

dd($productList, $basketList);
