<?php

require 'functions.php';

$database = require 'bootstrap.php';
$tasks = $database->selectAll('todos');

//dd($tasks);

require 'index.view.php';

