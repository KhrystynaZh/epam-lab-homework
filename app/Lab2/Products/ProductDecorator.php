<?php

namespace Lab2\Products;

/**
 * Class ProductDecorator
 * @package Lab2\Products
 */
abstract class ProductDecorator implements IProduct
{
    /**
     * @var \Lab2\Products\IProduct
     */
    protected $product;

    /**
     * ProductDecorator constructor.
     *
     * @param \Lab2\Products\IProduct $product
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
     * @return \Lab2\Products\IProduct
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