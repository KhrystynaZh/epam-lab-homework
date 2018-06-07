<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products;

/**
 * Class ProductPackage
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products
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
