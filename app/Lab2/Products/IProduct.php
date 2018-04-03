<?php

namespace Lab2\Products;

/**
 * Interface IProduct
 * @package Lab2\Products
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
     * @return \Lab2\Products\IProduct
     */
    public function setCharacteristics(array $characteristics): IProduct;
}
