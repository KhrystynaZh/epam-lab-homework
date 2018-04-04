<?php

namespace Lab3;

/**
 * Class Verified
 * @package Lab3
 */
class Verified extends State
{
    /**
     * Verified constructor.
     *
     * @param \Lab3\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('verified');
    }

    /**
     * @return \Lab3\State
     */
    public function closed(): State
    {
        $this->task->closed();
        return new Closed($this->task);
    }
}