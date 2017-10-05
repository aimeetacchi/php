
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laracasts - php-for-beginners</title>
	<style>
	header {
		background-color: grey;
		padding: 1em;
		text-align: center;

	}
	</style>
</head>
<body>
	<header>
		<h1>Laracasts - php-for-beginners</h1>
	</header>

	<!-- Loop through ARRAY ANIMALS -->
	<ul>
		<?php foreach($animals as $animal) : ?>
		<li><?= $animal; ?></li>
		<?php endforeach; ?>

		<!-- <?php
		 foreach($names as $name) {
			echo '<li>' . $name . '</li>' ;
			} 
		?> -->
	</ul>

	<!-- LOOP through Associative Array PERSON -->
	<ul>
		<?php foreach($person as $feature => $val) : ?>
		<li><strong><?= $feature ?>: </strong><?= $val ?></li>
		<?php endforeach; ?>
	</ul>


	<!-- LOOP THROUGH Associative ARRAY TASK -->
	<ul>
		<?php foreach($task as $feature => $val) : ?>
		<li><strong><?= $feature ?>: </strong><?= $val ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>