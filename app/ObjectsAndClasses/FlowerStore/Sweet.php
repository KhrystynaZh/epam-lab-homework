<?php

namespace ObjectsAndClasses\FlowerStore;

class Sweet extends Product
{
    protected $type = 'sweet';
    private $name;
    private $price;
    private $creator;
    private $matherialType;

    public function __construct(string $name, float $price, string $creator, string $matherialType)
    {
        $this->name = $name;
        $this->price = $price;
        $this->creator = $creator;
        $this->matherialType = $matherialType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCreator(): string
    {
        return $this->creator;
    }

    public function getMatherialType(): string
    {
        return $this->matherialType;
    }
}