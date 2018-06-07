<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Payments;

/**
 * Class WebMoneyPayment
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Payments
 */
class WebMoneyPayment implements PaymentInterface
{
    /**
     * @return string
     */
    public function getMethodName(): string
    {
        return 'WebMoney';
    }

    /**
     * @param float $sum
     *
     * @return bool
     */
    public function createPayment(float $sum): bool
    {
        return true;
    }
}