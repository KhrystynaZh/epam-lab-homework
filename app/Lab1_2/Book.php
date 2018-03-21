<?php

namespace Lab1_2;

class Book extends PublicationAbstract
{
    private $author;
    private $year;
    private $edition;

    public function __construct(Author $author, string $title, int $year, string $edition, array $categories = [])
    {
        parent::__construct($title, $categories);

        $this->author = $author;
        $this->year = $year;
        $this->edition = $edition;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getEdition(): string
    {
        return $this->edition;
    }


}