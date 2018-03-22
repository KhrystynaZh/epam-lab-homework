<?php

namespace Lab2\Deliveries;

/**
 * Class UkrPoshtaDelivery
 * @package Lab2\Deliveries
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