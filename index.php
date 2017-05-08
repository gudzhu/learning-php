<?php
require 'functions.php';

/**
* 
*/
class Task
{
	public $description;
	public $complete;
}

try {
	$pdo = new PDO('mysql:hostname=127.0.0.1;dbname=mytodos', 'root', '68696');
} catch (PDOException $e) {
	die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


dd($tasks);

require 'index.view.php';

