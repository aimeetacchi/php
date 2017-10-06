
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
		<h2>
			<!-- ?= this is the same as using ?php echo  and htmlspecialchars function stops script injection -->
			<?= "Hello, " . htmlspecialchars($_GET['name']); ?>
		</h2>
	</header>

	<h2>Animals</h2>
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
	<h2>Person</h2>
	<!-- LOOP through Associative Array PERSON -->
	<ul>
		<?php foreach($person as $feature => $val) : ?>
		<li><strong><?= $feature ?>: </strong><?= $val ?></li>
		<?php endforeach; ?>
	</ul>

	<h2>Task for the day</h2>
	<!-- LOOP THROUGH Associative ARRAY TASK -->
	<ul>
		<li>
			<strong>Name: </strong><?= $task['title']; ?>
		</li>

		<li>
			<strong>Due Date: </strong><?= $task['due']; ?>
		</li>

		<li>
			<strong>Person Responsible: </strong><?= $task['assigned_to']; ?>
		</li>

		<li>
			<strong>Status: </strong>
			<?php if(!$task['completed']) : ?>
				<span>&#9989;</span>

			<?php else : ?>
				<span>&#10062;</span>

			<?php endif; ?>
		</li>
	</ul>


<!-- OBJECT FROM THE INDEX.PHP FILE -->
	<h2>Object Constructor</h2>

	<?php foreach ($tasks as $task) : ?>
		<li>
			<?php if($task->completed) : ?>
				<strike><?= $task->description; ?></strike>
			<?php else: ?>

			<?= $task->description; ?>

			<?php endif; ?>
		</li>

	<?php endforeach; ?>
</body>
</html>