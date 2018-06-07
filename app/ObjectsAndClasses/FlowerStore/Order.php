<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Class Order
 * @package ObjectsAndClasses\FlowerStore
 */
class Order implements OrderInterface
{
    /**
     * @var false|string
     */
    private $orderDate;

    /**
     * @var \ObjectsAndClasses\FlowerStore\ClientInterface
     */
    private $client;

    /**
     * @var bool
     */
    private $needDelivery;

    /**
     * @var array
     */
    private $products = [];

    /**
     * @var int
     */
    private $orderSum = 0;

    /**
     * @var bool
     */
    private $paid = false;

    /**
     * @var bool
     */
    private $delivered = false;

    /**
     * @var bool
     */
    private $completed = false;

    /**
     * Order constructor.
     *
     * @param \ObjectsAndClasses\FlowerStore\ClientInterface $client
     * @param bool                                           $needDelivery
     */
    public function __construct(ClientInterface $client, bool $needDelivery = false)
    {
        $this->client = $client;
        $this->needDelivery = $needDelivery;
        $this->orderDate = date('Y-m-d');
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->orderDate;
    }

    /**
     * @return \ObjectsAndClasses\FlowerStore\ClientInterface
     */
    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    /**
     * @return bool
     */
    public function isNeedDelivery(): bool
    {
        return $this->needDelivery;
    }

    /**
     * @return \ObjectsAndClasses\FlowerStore\Order
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
     * @return \ObjectsAndClasses\FlowerStore\Order
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
     * @return \ObjectsAndClasses\FlowerStore\Order
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
     * @param \ObjectsAndClasses\FlowerStore\Stock   $stock
     * @param \ObjectsAndClasses\FlowerStore\Product $product
     * @param int                                    $amount
     *
     * @return \ObjectsAndClasses\FlowerStore\Order
     */
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

    /**
     * @return float
     */
    public function getOrderSum(): float
    {
        return $this->orderSum;
    }
}