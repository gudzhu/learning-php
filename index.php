<?php
require 'functions.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'root', '68696');
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);
dd($results);

require 'index.view.php';

