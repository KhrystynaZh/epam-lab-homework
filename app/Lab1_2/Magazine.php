<?php

namespace Lab1_2;

class Magazine extends PublicationAbstract
{
    private $date;
    private $edition;

    public function __construct(string $title, string $date, string $edition, array $categories = [])
    {
        parent::__construct($title, $categories);

        $this->date = $date;
        $this->edition = $edition;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getEdition(): string
    {
        return $this->edition;
    }
}