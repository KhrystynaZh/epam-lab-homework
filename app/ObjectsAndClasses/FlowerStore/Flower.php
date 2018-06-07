<?php

namespace ObjectsAndClasses\FlowerStore;

class Flower extends Product
{
    protected $type = 'flower';
    private $price;
    private $name;
    private $color;
    private $isNatural;

    public function __construct(string $name, float $price, string $color, bool $isNatural)
    {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
        $this->isNatural = $isNatural;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getIsNatural(): bool
    {
        return $this->isNatural;
    }
}