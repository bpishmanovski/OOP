<?php

class Task
{
	public $title;
	public $description;
	public $completed = false;

	public function __construct($title, $description)
	{
		$this->title = $title;
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}


}

$task = new Task('Learn OOP', 'The teacher bla bla...');
var_dump($task->title, $task->description, $task->completed, $task->complete(), $task->completed);

