<?php

class Greeting
{
    public $message;
    public function __construct($message)
    {
        $this->message = $message;
    }
}
$message = new Greeting('Hello world');
$greeting = $message->message;

require 'index.view.php';

