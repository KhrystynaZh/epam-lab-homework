<?php

namespace ObjectsAndClasses\TaskWithStatePattern;

/**
 * Class State
 * @package ObjectsAndClasses\TaskWithStatePattern
 */
abstract class State
{
    /**
     * @var \ObjectsAndClasses\TaskWithStatePattern\Task
     */
    protected $task;

    /**
     * State constructor.
     *
     * @param \ObjectsAndClasses\TaskWithStatePattern\Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\Task
     */
    public function getTask(): Task
    {
        return $this->task;
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function opened(): State
    {
        echo 'Operation OPEN is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function inProgress(): State
    {
        echo 'Operation IN PROGRESS is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function resolved(): State
    {
        echo 'Operation RESOLVE is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function reopened(): State
    {
        echo 'Operation REOPEN is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function verified(): State
    {
        echo 'Operation VERIFY is not allowed from this stage' . '<br>';
        return $this;
    }

    /**
     * @return \ObjectsAndClasses\TaskWithStatePattern\State
     */
    public function closed(): State
    {
        echo 'Operation CLOSE is not allowed from this stage' . '<br>';
        return $this;
    }
}
