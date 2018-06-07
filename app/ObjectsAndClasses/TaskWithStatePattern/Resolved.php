<?php

namespace ObjectsAndClasses\TaskWithStatePattern;

/**
 * Class Resolved
 * @package ObjectsAndClasses\TaskWithStatePattern
 */
class Resolved extends State
{
    /**
     * Resolved constructor.
     *
     * @param \ObjectsAndClasses\TaskWithStatePattern\Task $task
     */
     public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('resolved');
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function verified(): State
    {
        $this->task->verified();
        return new Verified($this->task);
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function reopened(): State
    {
        $this->task->reopened();
        return new Reopened($this->task);
    }
}