<?php

namespace Lab2\Payments;

/**
 * Class WebMoneyPayment
 * @package Lab2\Payments
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