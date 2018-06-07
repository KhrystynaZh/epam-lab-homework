<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Deliveries;

/**
 * Interface DeliveryInterface
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Deliveries
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
