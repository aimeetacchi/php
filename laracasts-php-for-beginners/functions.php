<?php

function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

function oldEnough($age){

	if($age >= 21){
		echo 'Welcome to the club, have fun';
	} else {
		echo 'You need to be 21 or over!!';
	}
}