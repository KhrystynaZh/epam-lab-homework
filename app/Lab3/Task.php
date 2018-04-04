<?php

namespace Lab3;

/**
 * Class Task
 * @package Lab3
 */
class Task
{
    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $status = '';

    /**
     * Task constructor.
     *
     * @param string $author
     * @param string $date
     */
    public function __construct(string $author, string $date)
    {
        $this->author = $author;
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return \Lab3\Task
     */
    public function opened(): Task
    {
        echo 'Task created by ' . $this->getAuthor() . ' on ' . $this->getDate() . ' is OPENED' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\Task
     */
    public function inProgress(): Task
    {
        echo 'Task created by ' . $this->getAuthor() . ' on ' . $this->getDate() . ' is IN PROGRESS' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\Task
     */
    public function resolved(): Task
    {
        echo 'Task created by ' . $this->getAuthor() . ' on ' . $this->getDate() . ' is RESOLVED' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\Task
     */
    public function reopened(): Task
    {
        echo 'Task created by ' . $this->getAuthor() . ' on ' . $this->getDate() . ' is REOPENED' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\Task
     */
    public function verified(): Task
    {
        echo 'Task created by ' . $this->getAuthor() . ' on ' . $this->getDate() . ' is VERIFIED' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\Task
     */
    public function closed(): Task
    {
        echo 'Task created by ' . $this->getAuthor() . ' on ' . $this->getDate() . ' is CLOSED' . '<br>';
        return $this;
    }
}
