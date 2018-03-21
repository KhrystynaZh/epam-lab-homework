<?php

namespace Lab2;

class Client
{
    private $id;
    private $address;
    private $phone;

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