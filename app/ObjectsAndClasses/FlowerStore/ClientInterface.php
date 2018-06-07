<?php

namespace ObjectsAndClasses\FlowerStore;

interface ClientInterface
{
    public function getId(): int;

    public function getAddress(): string;

    public function getPhone(): string;

    public function payOrder(OrderInterface $order): OrderInterface;
}