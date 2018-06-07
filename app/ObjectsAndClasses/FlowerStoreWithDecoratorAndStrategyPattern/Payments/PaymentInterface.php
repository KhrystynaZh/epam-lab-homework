<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Payments;

/**
 * Interface PaymentInterface
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Payments
 */
interface PaymentInterface
{
    /**
     * @return string
     */
    public function getMethodName(): string;

    /**
     * @param float $sum
     *
     * @return bool
     */
    public function createPayment(float $sum): bool;
}
