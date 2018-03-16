<?php

namespace Lab1;

class Client implements ClientInterface
{
    private $id;
    private $address;
    private $phone;

    public function __construct(int $id, string $address, string $phone)
    {
        $this->id = $id;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function payOrder(OrderInterface $order): OrderInterface
    {
        return $order->setPaid();
    }
}