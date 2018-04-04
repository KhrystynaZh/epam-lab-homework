<?php

namespace Lab3;

//-----------------
//створюємо завдання
//-----------------

$task = new Task('Peter', '04-04-2018');

//-----------------
//надаємо йому статус Opened і перевіряємо статус
//-----------------

$newTask = new Opened($task);
echo 'Status: '. $task->getStatus() . '<br><br>';

//-----------------
//надаємо йому статус inProgress і перевіряємо статус
//-----------------

$newTask = $newTask->inProgress();
echo 'Status: '. $task->getStatus() . '<br><br>';

//-----------------
//надаємо йому статус resolved і перевіряємо статус
//-----------------

$newTask = $newTask->resolved();
echo 'Status: '. $task->getStatus() . '<br><br>';

//-----------------
//надаємо недоступний з даного кроку статус inProgress і перевіряємо статус
//-----------------

$newTask = $newTask->inProgress();
echo 'Status: '. $task->getStatus() . '<br><br>';

//-----------------
//надаємо йому статус verified і перевіряємо статус
//-----------------

$newTask->verified();
echo 'Status: '. $task->getStatus() . '<br><br>';



