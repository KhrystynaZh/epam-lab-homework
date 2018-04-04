<?php

namespace Lab3;

/**
 * Class State
 * @package Lab3
 */
abstract class State
{
    /**
     * @var \Lab3\Task
     */
    protected $task;

    /**
     * State constructor.
     *
     * @param \Lab3\Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * @return \Lab3\Task
     */
    public function getTask(): Task
    {
        return $this->task;
    }

    /**
     * @return \Lab3\State
     */
    public function opened(): State
    {
        echo 'Operation OPEN is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\State
     */
    public function inProgress(): State
    {
        echo 'Operation IN PROGRESS is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\State
     */
    public function resolved(): State
    {
        echo 'Operation RESOLVE is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\State
     */
    public function reopened(): State
    {
        echo 'Operation REOPEN is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\State
     */
    public function verified(): State
    {
        echo 'Operation VERIFY is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \Lab3\State
     */
    public function closed(): State
    {
        echo 'Operation CLOSE is not allowed from this stage' . '<br>';
        return $this;
    }
}
