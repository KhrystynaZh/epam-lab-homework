<?php

namespace Lab2;

use Lab2\Deliveries\NovaPoshtaDelivery;
use Lab2\Payments\WebMoneyPayment;
use Lab2\Products\Product;

//-----------------
//створюємо магазин
//-----------------

$store = new Store('IShop', 'Plastova Str. 2');

//-----------------
//створюємо продукцію
//-----------------

$laptop = new Product('laptop', 'Asus VivoBook Max 1', 9000, [
    'producer' => 'Asus',
    'processor' => 'Intel Pentium N4200',
    'display' => '15.6 Full HD',
    'RAM' => '4 GB',
]);
$dress = new Product('cloth', 'Dress', 200, [
    'producer' => 'Colins',
    'color' => 'white',
    'size'  => 'S',
    'material'  => 'cotton',
]);
$doll = new Product('toy', 'Doll', 100, [
    'producer' => 'Hello Kitty',
    'material' => 'plastic',
    'minAge' => '0',
    'maxAge' => '3',
]);

//-----------------
//додаємо продукти в магазин
//-----------------

$store->addProduct($laptop, 5)
    ->addProduct($dress, 10)
    ->addProduct($doll, 15);

//-----------------
//перегляд продуктів в магазині
//-----------------

$store->getProducts();

//-----------------
//створюємо клієнта
//-----------------

$client = new Client(10, 'Zelena Str. 1', '12345678');

//-----------------
//заповнюємо кошик товарами з додатковими послугами
//-----------------

$basket = new Basket($client);
$basket->addProduct($store, $laptop, 1, ['package'])
    ->addProduct($store, $dress, 2, ['package', 'greetingCard'])
    ->addProduct($store, $doll, 3);

$basket->deleteProduct($store, $dress, 1, ['package', 'greetingCard'])
    ->deleteProduct($store, $doll, 2);

//-----------------
//перегляд продуктів в кошику
//-----------------

$basket->getProducts();

//-----------------
//формуємо замовлення та обчислюємо знижку від суми
//-----------------

$order = new Order($basket);
$order->getDiscount();

//-----------------
//вибираємо спосіб доставки та оплати
//-----------------

$order->setDelivery(new NovaPoshtaDelivery);
$order->setPayment(new WebMoneyPayment);

//-----------------
//обробляємо замовлення
//-----------------

$store->handleOrder($order);

//-----------------
//надсилаємо підтвердження
//-----------------

$store->sendConfirmation($order);

