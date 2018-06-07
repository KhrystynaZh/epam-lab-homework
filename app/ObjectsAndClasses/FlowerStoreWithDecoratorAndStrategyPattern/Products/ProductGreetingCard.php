<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products;

/**
 * Class ProductPackage
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products
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
