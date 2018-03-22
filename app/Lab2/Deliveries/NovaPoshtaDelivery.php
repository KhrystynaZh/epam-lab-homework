<?php

namespace Lab2\Deliveries;

/**
 * Class NovaPoshtaDelivery
 * @package Lab2\Deliveries
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