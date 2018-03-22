<?php

namespace Lab2\Deliveries;

/**
 * Interface DeliveryInterface
 * @package Lab2\Deliveries
 */
interface DeliveryInterface
{
    /**
     * @return float
     */
    public function getCost(): float;

    /**
     * @return string
     */
    public function getMethodName(): string;
}
