<?php
require 'functions.php';
require 'Task.php';

try {
    $pdo = new PDO('mysql:hostname=127.0.0.1;dbname=mytodo', 'root', '68696');
} catch (PDOException $e) {
    die($e->getCode() . ': ' . $e->getMessage());
}

$statement = $pdo->prepare('select * from todos;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
//dd($tasks);

require 'index.view.php';

