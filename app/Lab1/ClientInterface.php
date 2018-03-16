<?php

namespace Lab1;

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
     * @param \Lab1\OrderInterface $order
     *
     * @return \Lab1\OrderInterface
     */
    public function payOrder(OrderInterface $order): OrderInterface;
}