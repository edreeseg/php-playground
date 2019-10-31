<?php

require 'functions.php';

class Task {
    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        // Automatically triggered on instantiation
        $this->description = $description;
    }
    public function isComplete()
    {
        return $this->completed;
    }
    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Go to the store');

dd($task);

require 'index.view.php';