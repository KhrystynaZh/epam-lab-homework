<?php

namespace Lab1;

class Order implements OrderInterface
{
    private $orderDate;
    private $client;
    private $needDelivery;
    private $products = [];
    private $orderSum = 0;
    private $paid = false;
    private $delivered = false;
    private $completed = false;

    public function __construct(ClientInterface $client, bool $needDelivery = false)
    {
        $this->client = $client;
        $this->needDelivery = $needDelivery;
        $this->orderDate = date('Y-m-d');
    }

    public function getDate(): string
    {
        return $this->orderDate;
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    public function isNeedDelivery(): bool
    {
        return $this->needDelivery;
    }

    public function setPaid(): Order
    {
        $this->paid = true;

        return $this;
    }

    public function isPaid(): bool
    {
        return $this->paid;
    }

    public function setCompleted(): Order
    {
        $this->completed = true;

        return $this;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }

    public function setDelivered(): Order
    {
        $this->delivered = true;

        return $this;
    }

    public function isDelivered(): bool
    {
        return $this->delivered;
    }

    public function addProduct(Stock $stock, Product $product, int $amount): Order
    {
        if(!$stock->getFromStock($product, $amount)) {
            return $this;
        }

        $this->products[] = [
            'product' => $product,
            'amount' => $amount,
        ];

        $this->orderSum += ($product->getPrice() * 1.05) * $amount;

        return $this;
    }

    public function getOrderSum(): float
    {
        return $this->orderSum;
    }
}