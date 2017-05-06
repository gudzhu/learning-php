<?php

$animals = ['cat', 'dog'];
$animals[] = 'pork';
$animals[] = 'hippopotamus';

echo '<pre>';
var_dump($animals);
echo '</pre>';

require 'index.view.php';

