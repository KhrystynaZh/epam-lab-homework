<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Interface OrderInterface
 * @package ObjectsAndClasses\FlowerStore
 */
interface OrderInterface
{
    /**
     * @return string
     */
    public function getDate(): string;

    /**
     * @return \ObjectsAndClasses\FlowerStore\ClientInterface
     */
    public function getClient(): ClientInterface;

    /**
     * @return bool
     */
    public function isNeedDelivery(): bool;

    /**
     * @return \ObjectsAndClasses\FlowerStore\Order
     */
    public function setPaid(): Order;

    /**
     * @return bool
     */
    public function isPaid(): bool;

    /**
     * @return \ObjectsAndClasses\FlowerStore\Order
     */
    public function setCompleted(): Order;

    /**
     * @return bool
     */
    public function isCompleted(): bool;

    /**
     * @return \ObjectsAndClasses\FlowerStore\Order
     */
    public function setDelivered(): Order;

    /**
     * @return bool
     */
    public function isDelivered(): bool;

    /**
     * @param \ObjectsAndClasses\FlowerStore\Stock   $stock
     * @param \ObjectsAndClasses\FlowerStore\Product $product
     * @param int                                    $amount
     *
     * @return \ObjectsAndClasses\FlowerStore\Order
     */
    public function addProduct(Stock $stock, Product $product, int $amount): Order;

    /**
     * @return float
     */
    public function getOrderSum(): float;
}