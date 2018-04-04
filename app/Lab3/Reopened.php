<?php

namespace Lab3;

/**
 * Class Reopened
 * @package Lab3
 */
class Reopened extends State
{
    /**
     * Reopened constructor.
     *
     * @param \Lab3\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('reopened');
    }

    /**
     * @return \Lab3\State
     */
    public function inProgress(): State
    {
        $this->task->inProgress();
        return new InProgress($this->task);
    }
}