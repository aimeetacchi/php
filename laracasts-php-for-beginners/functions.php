<?php

function connectToDb() {
// LOCAL CONNECT TO DATABASE
	try {
	return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}


function fetchAllTasks($pdo) {
	
	$statement = $pdo->prepare('select * from todos');
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

// ======================

function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

// function oldEnough($age){

// 	if($age >= 21){
// 		echo 'Welcome to the club, have fun';
// 	} else {
// 		echo 'You need to be 21 or over!!';
// 	}
// }