<?php

namespace ObjectsAndClasses\FlowerStore;

interface OrderInterface
{
    public function getDate(): string;

    public function getClient(): ClientInterface;

    public function isNeedDelivery(): bool;

    public function setPaid(): Order;

    public function isPaid(): bool;

    public function setCompleted(): Order;

    public function isCompleted(): bool;

    public function setDelivered(): Order;

    public function isDelivered(): bool;

    public function addProduct(Stock $stock, Product $product, int $amount): Order;

    public function getOrderSum(): float;
}