<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Deliveries;

/**
 * Class NovaPoshtaDelivery
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Deliveries
 */
class NovaPoshtaDelivery implements DeliveryInterface
{
    /**
     * @return float
     */
    public function getCost(): float
    {
        return 60.0;
    }

    /**
     * @return string
     */
    public function getMethodName(): string
    {
        return 'Nova Poshta';
    }
}