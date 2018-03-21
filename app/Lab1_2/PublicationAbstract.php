<?php

namespace Lab1_2;

abstract class PublicationAbstract
{
    private $title;
    private $categories = [];

    public function __construct(string $title, array $categories = [])
    {
        $this->title = $title;
        $this->categories = $categories;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function hasCategories(array $categories): bool
    {
        return (bool)array_intersect($this->categories, $categories);
    }
}