<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Deliveries;

/**
 * Class UkrPoshtaDelivery
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Deliveries
 */
class UkrPoshtaDelivery implements DeliveryInterface
{
    /**
     * @return float
     */
    public function getCost(): float
    {
        return 10.0;
    }

    /**
     * @return string
     */
    public function getMethodName(): string
    {
        return 'UkrPoshta';
    }
}