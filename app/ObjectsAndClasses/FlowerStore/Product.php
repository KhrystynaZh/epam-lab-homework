<?php

namespace ObjectsAndClasses\FlowerStore;

abstract class Product
{
    protected $type;

    abstract function getPrice(): float;

    abstract function getName(): string;

    public function getType(): string
    {
        return $this->type;
    }
}