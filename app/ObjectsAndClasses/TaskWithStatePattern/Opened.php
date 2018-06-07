<?php

namespace ObjectsAndClasses\TaskWithStatePattern;

/**
 * Class Opened
 * @package ObjectsAndClasses\TaskWithStatePattern
 */
class Opened extends State
{
    /**
     * Opened constructor.
     *
     * @param \ObjectsAndClasses\TaskWithStatePattern\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->opened();
        $this->task->setStatus('opened');
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function inProgress(): State
    {
        $this->task->inProgress();
        return new InProgress($this->task);
    }
}
