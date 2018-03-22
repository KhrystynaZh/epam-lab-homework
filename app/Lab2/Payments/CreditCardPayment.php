<?php

namespace Lab2\Payments;

/**
 * Class CreditCardPayment
 * @package Lab2\Payments
 */
class CreditCardPayment implements PaymentInterface
{
    /**
     * @return string
     */
    public function getMethodName(): string
    {
        return 'Credit Card';
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