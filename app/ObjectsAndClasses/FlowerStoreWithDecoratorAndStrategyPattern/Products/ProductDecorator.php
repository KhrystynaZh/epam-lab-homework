<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products;

/**
 * Class ProductDecorator
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products
 */
abstract class ProductDecorator implements IProduct
{
    /**
     * @var \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct
     */
    protected $product;

    /**
     * ProductDecorator constructor.
     *
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct $product
     */
    public function __construct(IProduct $product)
    {
         $this->product = $product;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->product->getCategory();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->product->getName();
    }

    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return $this->product->getCharacteristics();
    }

    /**
     * @param array $characteristics
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct
     */
    public function setCharacteristics(array $characteristics): IProduct
    {
        return $this->product->setCharacteristics($characteristics);
    }

    /**
     * @return float
     */
    abstract public function getPrice(): float;
}