<?php

namespace Lab1_2;

class ReadingCard
{
    private $reader;
    private $books = [];

    public function __construct(Reader $reader)
    {
        $this->books = $reader;
    }

    public function getReader()
    {
        return $this->reader;
    }

    public function getBooks()
    {
        return $this->books;
    }
}