<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Interface ClientInterface
 * @package ObjectsAndClasses\FlowerStore
 */
interface ClientInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getAddress(): string;

    /**
     * @return string
     */
    public function getPhone(): string;

    /**
     * @param \ObjectsAndClasses\FlowerStore\OrderInterface $order
     *
     * @return \ObjectsAndClasses\FlowerStore\OrderInterface
     */
    public function payOrder(OrderInterface $order): OrderInterface;
}