<?php

namespace Lab2\Products;

/**
 * Class ProductPackage
 * @package Lab2\Products
 */
class ProductPackage extends ProductDecorator
{
    /**
     * @var float
     */
    private $extraPrice = 100;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->product->getPrice() + $this->extraPrice;
    }
}
