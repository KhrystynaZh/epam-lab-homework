<?php

namespace Lab3;

/**
 * Class Opened
 * @package Lab3
 */
class Opened extends State
{
    /**
     * Opened constructor.
     *
     * @param \Lab3\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->opened();
        $this->task->setStatus('opened');
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
