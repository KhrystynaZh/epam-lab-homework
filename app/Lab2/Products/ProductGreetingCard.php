<?php

namespace Lab2\Products;

/**
 * Class ProductPackage
 * @package Lab2\Products
 */
class ProductGreetingCard extends ProductDecorator
{
    /**
     * @var float
     */
    private $extraPrice = 10;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->product->getPrice() + $this->extraPrice;
    }
}
