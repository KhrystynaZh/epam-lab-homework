<?php

namespace Lab3;

/**
 * Class InProgress
 * @package Lab3
 */
class InProgress extends State
{
    /**
     * InProgress constructor.
     *
     * @param \Lab3\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('in progress');
    }

    /**
     * @return \Lab3\State
     */
    public function resolved(): State
    {
        $this->task->resolved();
        return new Resolved($this->task);
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