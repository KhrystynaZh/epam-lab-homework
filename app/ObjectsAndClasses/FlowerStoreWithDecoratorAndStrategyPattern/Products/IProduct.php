<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products;

/**
 * Interface IProduct
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products
 */
interface IProduct
{
    /**
     * @return string
     */
    public function getCategory(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @return array
     */
    public function getCharacteristics(): array;

    /**
     * @param array $characteristics
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct
     */
    public function setCharacteristics(array $characteristics): IProduct;
}
