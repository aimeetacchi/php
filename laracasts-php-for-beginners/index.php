<?php
require 'functions.php';

// Class Object constructor ===========
class Task {

	public $description;
	public $completed = false;

	public function __construct($description) {
		$this->description = $description;
	}

	// method to check if task is complete, will return true or false
	public function isComplete() {
		return $this->completed;
	}

	public function complete(){
		$this->completed = true;
	}
}

// Task Array which created Objects from the constructor function.
$tasks = [
	//input becomes description
	new Task('Make Tea'),
	new Task('Clean Car'),
	new Task('Buy food')
];

$tasks[0]->complete();

//dd($tasks);



//==================================

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
//dd($animals);
oldEnough(20);

require 'index.view.php';