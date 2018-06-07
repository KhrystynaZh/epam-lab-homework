<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Class Sweet
 * @package ObjectsAndClasses\FlowerStore
 */
class Sweet extends Product
{
    /**
     * @var string
     */
    protected $type = 'sweet';

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $creator;

    /**
     * @var string
     */
    private $matherialType;

    /**
     * Sweet constructor.
     *
     * @param string $name
     * @param float  $price
     * @param string $creator
     * @param string $matherialType
     */
    public function __construct(string $name, float $price, string $creator, string $matherialType)
    {
        $this->name = $name;
        $this->price = $price;
        $this->creator = $creator;
        $this->matherialType = $matherialType;
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
    public function getCreator(): string
    {
        return $this->creator;
    }

    /**
     * @return string
     */
    public function getMatherialType(): string
    {
        return $this->matherialType;
    }
}