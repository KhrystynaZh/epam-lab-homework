<?php

namespace Lab2;

class Characteristics
{
    private $characteristics = [
        'laptop' => [
            'producer' => 'Asus',
            'processor' => 'Intel Pentium N4200',
            'display' => '15.6 Full HD',
            'RAM' => '4 GB',
            ],
        'cloth' => [
            'producer' => 'Colins',
            'color' => 'white',
            'size'  => 'S',
            'material'  => 'cotton',
            ],
        'toy' => [
            'producer' => 'Hello Kitty',
            'material' => 'plastic',
            'minAge' => '0',
            'maxAge' => '3',
            ],
        ];

    /**
     * @return array
     */
    public function getCharacteristics(string $category): array
    {
        return $this->characteristics[$category];
    }
}