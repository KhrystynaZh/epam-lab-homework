<?php

namespace ObjectsAndClasses\TaskWithStatePattern;

/**
 * Class Reopened
 * @package ObjectsAndClasses\TaskWithStatePattern
 */
class Reopened extends State
{
    /**
     * Reopened constructor.
     *
     * @param \ObjectsAndClasses\TaskWithStatePattern\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('reopened');
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