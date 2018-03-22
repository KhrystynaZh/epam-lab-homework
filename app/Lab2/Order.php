<?php

namespace Lab2;

use Lab2\Deliveries\DeliveryInterface;
use Lab2\Payments\PaymentInterface;

/**
 * Class Order
 * @package Lab2
 */
class Order
{
    /**
     * @var string
     */
    private $orderDate;

    /**
     * @var \Lab2\Basket
     */
    private $basket;

    /**
     * @var array
     */
    private $products = [];

    /**
     * @var float
     */
    private $discount = 0;

    /**
     * @var DeliveryInterface
     */
    private $delivery;

    /**
     * @var PaymentInterface
     */
    private $payment;

    /**
     * @var bool
     */
    private $paid = false;

    /**
     * @var bool
     */
    private $completed = false;

    /**
     * Order constructor.
     *
     * @param \Lab2\Basket $basket
     */
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
        $this->products = $basket->getProducts();
        $this->orderDate = date('Y-m-d');
        $this->discount = ($this->basket->getBasketSum() >= 2000) ? 0.05 : 0;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->orderDate;
    }

    /**
     * @return \Lab2\Client
     */
    public function getClient(): Client
    {
        return $this->basket->getClient();
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @return \Lab2\Deliveries\DeliveryInterface
     */
    public function getDelivery(): DeliveryInterface
    {
        return $this->delivery;
    }

    /**
     * @param \Lab2\Deliveries\DeliveryInterface $delivery
     *
     * @return \Lab2\Order
     */
    public function setDelivery(DeliveryInterface $delivery): Order
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return \Lab2\Payments\PaymentInterface
     */
    public function getPayment(): PaymentInterface
    {
        return $this->payment;
    }

    /**
     * @param \Lab2\Payments\PaymentInterface $payment
     *
     * @return \Lab2\Order
     */
    public function setPayment(PaymentInterface $payment): Order
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return \Lab2\Order
     */
    public function setPaid(): Order
    {
        $this->paid = true;
        $this->basket->clearBasket();

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
     * @return float
     */
    public function getOrderSum(): float
    {
        $deliveryCost = $this->getDelivery()->getCost() ?? 0;
        return $this->basket->getBasketSum() - ($this->basket->getBasketSum() * $this->discount) + $deliveryCost;
    }
}