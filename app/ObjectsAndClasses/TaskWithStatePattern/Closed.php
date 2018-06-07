<?php
/**
 * Created by PhpStorm.
 * User: Halyna
 * Date: 03.04.2018
 * Time: 17:46
 */

namespace ObjectsAndClasses\TaskWithStatePattern;

/**
 * Class Closed
 * @package ObjectsAndClasses\TaskWithStatePattern
 */
class Closed extends State
{
    /**
     * Closed constructor.
     *
     * @param \ObjectsAndClasses\TaskWithStatePattern\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('closed');
    }
}