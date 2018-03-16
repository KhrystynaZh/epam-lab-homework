<?php

namespace Lab1;

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