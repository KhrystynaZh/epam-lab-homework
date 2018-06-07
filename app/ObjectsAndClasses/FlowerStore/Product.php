<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Class Product
 * @package ObjectsAndClasses\FlowerStore
 */
abstract class Product
{
    /**
     * @var
     */
    protected $type;

    /**
     * @return float
     */
    abstract function getPrice(): float;

    /**
     * @return string
     */
    abstract function getName(): string;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}