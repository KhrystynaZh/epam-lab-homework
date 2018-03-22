<?php

namespace Lab2;

class Product
{
    private $category;
    private $name;
    private $price;

    /**
     * @var \Lab2\ProductCharacteristics
     */
    private $characteristics;

    public function __construct(string $category, string $name, float $price, array $characteristics = [])
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->characteristics = new ProductCharacteristics($this->getCategory(), $characteristics);
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
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
     * @return \Lab2\Product
     */
    public function setCharacteristics(array $characteristics): Product
    {
        $this->characteristics->setCharacteristics($characteristics);
        return $this;
    }

}