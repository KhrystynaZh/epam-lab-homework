<?php

namespace Lab2;

class Order
{
    private $orderDate;
    private $basket;
    private $products = [];
    private $orderSum = 0;
    private $discount = 0;
    private $paid = false;
    private $delivered = false;
    private $completed = false;

    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
        $this->orderDate = date('Y-m-d');
        $this->products = $basket->getProducts();
        $this->orderSum = $basket->getBasketSum();
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->orderDate;
    }

    /**
     * @return \Lab2\Order
     */
    public function setPaid(): Order
    {
        $this->paid = true;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->paid;
    }

    /**
     * @return \Lab2\Order
     */
    public function setCompleted(): Order
    {
        $this->completed = true;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCompleted(): bool
    {
        return $this->completed;
    }

    /**
     * @return \Lab2\Order
     */
    public function setDelivered(): Order
    {
        $this->delivered = true;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDelivered(): bool
    {
        return $this->delivered;
    }

    /**
     * @return float
     */
    public function getOrderSum(): float
    {
        return $this->orderSum;
    }
}