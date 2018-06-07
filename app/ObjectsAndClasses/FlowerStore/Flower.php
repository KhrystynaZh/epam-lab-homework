<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Class Flower
 * @package ObjectsAndClasses\FlowerStore
 */
class Flower extends Product
{
    /**
     * @var string
     */
    protected $type = 'flower';

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $color;

    /**
     * @var bool
     */
    private $isNatural;

    /**
     * Flower constructor.
     *
     * @param string $name
     * @param float  $price
     * @param string $color
     * @param bool   $isNatural
     */
    public function __construct(string $name, float $price, string $color, bool $isNatural)
    {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
        $this->isNatural = $isNatural;
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
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return bool
     */
    public function getIsNatural(): bool
    {
        return $this->isNatural;
    }
}