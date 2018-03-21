<?php
/**
 * Created by PhpStorm.
 * User: Halyna
 * Date: 17.03.2018
 * Time: 17:26
 */

namespace Lab1_2;

class Newspaper extends PublicationAbstract
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