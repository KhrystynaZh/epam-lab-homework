<?php

namespace Lab1;

class Vase extends Product
{
    protected $type = 'vase';
    private $name;
    private $price;
    private $capacity;
    private $height;

    public function __construct(
        string $name,
        float $price,
        float $capacity,
        float $height
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->capacity = $capacity;
        $this->height = $height;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCapacity(): float
    {
        return $this->capacity;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}