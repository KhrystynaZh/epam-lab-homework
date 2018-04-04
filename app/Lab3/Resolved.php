<?php

namespace Lab3;

/**
 * Class Resolved
 * @package Lab3
 */
class Resolved extends State
{
    /**
     * Resolved constructor.
     *
     * @param \Lab3\Task $task
     */
     public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('resolved');
    }

    /**
     * @return \Lab3\State
     */
    public function verified(): State
    {
        $this->task->verified();
        return new Verified($this->task);
    }

    /**
     * @return \Lab3\State
     */
    public function reopened(): State
    {
        $this->task->reopened();
        return new Reopened($this->task);
    }
}