<?php

function connectToDb()
{
    try {
        return new PDO('mysql:hostname=127.0.0.1;dbname=mytodo', 'root', '68696');
    } catch (PDOException $e) {
        die($e->getCode() . ': ' . $e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos;');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}