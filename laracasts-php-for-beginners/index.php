<?php
require 'functions.php';
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
	'due' => '5 mins',
	'assigned_to' => 'Aimee',
	'completed' => true
];


// PHP FUNCTION
dd($animals);
oldEnough(20);

//require 'index.view.php';