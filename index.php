<?php
require 'functions.php';

$animals = ['cat', 'dog'];
$animals[] = 'pork';
$animals[] = 'hippopotamus';

dd($animals);

require 'index.view.php';

