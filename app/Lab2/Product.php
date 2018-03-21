<?php

namespace Lab2;

class Product
{
    private $category;
    private $name;
    private $price;
    private $characteristics = [];

    public function __construct(string $category, string $name, float $price)
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->setCharacteristics($category);
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
        return $this->characteristics;
    }

    /**
     * @param string $category
     */
    public function setCharacteristics(string $category): void
    {
        $characteristics = new Characteristics;
        $this->characteristics = $characteristics->getCharacteristics($category);
    }

}