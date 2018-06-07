<?php

namespace ObjectsAndClasses\TaskWithStatePattern;

/**
 * Class Verified
 * @package ObjectsAndClasses\TaskWithStatePattern
 */
class Verified extends State
{
    /**
     * Verified constructor.
     *
     * @param \ObjectsAndClasses\TaskWithStatePattern\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('verified');
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function closed(): State
    {
        $this->task->closed();
        return new Closed($this->task);
    }
}