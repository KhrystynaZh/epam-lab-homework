<?php
/**
 * Created by PhpStorm.
 * User: Halyna
 * Date: 03.04.2018
 * Time: 17:46
 */

namespace Lab3;

/**
 * Class Closed
 * @package Lab3
 */
class Closed extends State
{
    /**
     * Closed constructor.
     *
     * @param \Lab3\Task $task
     */
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('closed');
    }
}