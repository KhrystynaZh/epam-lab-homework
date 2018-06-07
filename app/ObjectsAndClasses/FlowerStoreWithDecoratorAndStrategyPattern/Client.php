<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern;

/**
 * Class Client
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern
 */
class Client
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $phone;

    /**
     * Client constructor.
     *
     * @param int    $id
     * @param string $address
     * @param string $phone
     */
    public function __construct(int $id, string $address, string $phone)
    {
        $this->id = $id;
        $this->address = $address;
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
}