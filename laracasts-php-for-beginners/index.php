<?php
// ARRAYS
$animals = [
	'Tiger',
	'Elephant',
	'Giraffe',
	'Lion',
	'Meerkat',
	'Penguin'
];

// Push to array
$animals[] = 'Wolf';

// Remove element from Array
unset($animals[3]);

// Associative Array, Key Value pairs
$person = [
	//key => val
	'age' => 32,
	'hair' => 'Red/Blue',
	'career' => 'Front End Developer'
];

// Push to an Associative Array
$person['name'] = 'Aimee';

// Remove element from Associative Array
unset($person['age']);


//TASK ARRAY

$task = [
	'title' => 'Make a cup of tea',
	'due' => 5,
	'assigned_to' => 'Aimee',
	'completed' => 'no'
];


// die(var_dump($person));

require 'index.view.php';