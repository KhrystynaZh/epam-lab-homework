<?php

namespace Lab2\Products;

/**
 * Class ProductCharacteristics
 * @package Lab2\Products
 */
class ProductCharacteristics
{
    /**
     * @var array
     */
    private $defaultCharacteristics = [
        'laptop' => [
            'producer' => '',
            'processor' => '',
            'display' => '',
            'RAM' => '',
        ],
        'cloth' => [
            'producer' => '',
            'color' => '',
            'size'  => '',
            'material'  => '',
        ],
        'toy' => [
            'producer' => '',
            'material' => '',
            'minAge' => '',
            'maxAge' => '',
        ],
    ];

    /**
     * @var array
     */
    private $characteristics;

    /**
     * ProductCharacteristics constructor.
     *
     * @param string $category
     * @param array  $characteristics
     */
    public function __construct(string $category, array $characteristics = [])
    {
        $this->characteristics = $this->defaultCharacteristics[$category] ?? [];

        if($characteristics) {
            $this->setCharacteristics($characteristics);
        }
    }

    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }

    /**
     * @param array $characteristics
     *
     * @return \Lab2\Products\ProductCharacteristics
     */
    public function setCharacteristics(array $characteristics): ProductCharacteristics
    {
        $this->characteristics = array_merge(
            $this->characteristics,
            array_intersect_key($characteristics, $this->characteristics)
        );

        return $this;
    }
}