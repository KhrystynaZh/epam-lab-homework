<?php

namespace Lab2\Payments;

/**
 * Interface PaymentInterface
 * @package Lab2\Payments
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
