<?php

namespace Lab1;

class Store
{
    private $name;
    private $address;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function handleOrder(OrderInterface $order): OrderInterface
    {
        if($order->isCompleted()) {
            return $order;
        }

        if(!$order->isPaid() && !$order->getClient()->payOrder($order)->isPaid()) {
            return $order;
        }

        if($order->isNeedDelivery() && !$order->isDelivered()) {
            $this->deliver($order);
        }

        return $order->setCompleted();
    }

    private function deliver(OrderInterface $order): OrderInterface
    {
        return $order->setDelivered();
    }
}