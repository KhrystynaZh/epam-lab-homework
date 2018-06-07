<?php

namespace ObjectsAndClasses\TaskWithStatePattern;

/**
 * Class InProgress
 * @package ObjectsAndClasses\TaskWithStatePattern
 */
class InProgress extends State
{
    /**
     * InProgress constructor.
     *
     * @param \ObjectsAndClasses\TaskWithStatePattern\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('in progress');
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function resolved(): State
    {
        $this->task->resolved();
        return new Resolved($this->task);
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