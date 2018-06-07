<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern;

use ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Deliveries\DeliveryInterface;
use ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Payments\PaymentInterface;

/**
 * Class Order
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern
 */
class Order
{
    /**
     * @var string
     */
    private $orderDate;

    /**
     * @var \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Basket
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
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Basket $basket
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
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Client
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
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Deliveries\DeliveryInterface
     */
    public function getDelivery(): DeliveryInterface
    {
        return $this->delivery;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Deliveries\DeliveryInterface $delivery
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Order
     */
    public function setDelivery(DeliveryInterface $delivery): Order
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Payments\PaymentInterface
     */
    public function getPayment(): PaymentInterface
    {
        return $this->payment;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Payments\PaymentInterface $payment
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Order
     */
    public function setPayment(PaymentInterface $payment): Order
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Order
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
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Order
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