<?php

namespace Lab1_2;

class Reader
{
    private $id;
    private $name;
    private $address;
    private $phone;

    public function __construct(int $id, string $name, string $address, string $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}