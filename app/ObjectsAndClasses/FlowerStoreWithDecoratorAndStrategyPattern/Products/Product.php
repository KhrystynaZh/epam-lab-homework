<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products;

/**
 * Class Product
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products
 */
class Product implements IProduct
{
    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\ProductCharacteristics
     */
    private $characteristics;

    /**
     * Product constructor.
     *
     * @param string $category
     * @param string $name
     * @param float  $price
     * @param array  $characteristics
     */
    public function __construct(string $category, string $name, float $price, array $characteristics = [])
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->characteristics = new ProductCharacteristics($this->getCategory(), $characteristics);
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics->getCharacteristics();
    }

    /**
     * @param array $characteristics
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct
     */
    public function setCharacteristics(array $characteristics): IProduct
    {
        $this->characteristics->setCharacteristics($characteristics);
        return $this;
    }
}
