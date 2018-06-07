<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Class Vase
 * @package ObjectsAndClasses\FlowerStore
 */
class Vase extends Product
{
    /**
     * @var string
     */
    protected $type = 'vase';

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $capacity;

    /**
     * @var float
     */
    private $height;

    /**
     * Vase constructor.
     *
     * @param string $name
     * @param float  $price
     * @param float  $capacity
     * @param float  $height
     */
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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getCapacity(): float
    {
        return $this->capacity;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }
}