<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Tasks</title>

	
</head>

<body>
 <header>
 </header>

	
<body>
	<h1>Tasks for Today</h1>
	<?= ucwords('my name is danny.')	?>
	<ul>
			<?php foreach ($task as $heading => $value) : ?>

			<li>
				<strong> <?= ucwords($heading); ?> </strong> <?= $value; ?>
			</li>
			<?php endforeach; ?>
			<br>
			<br>
<?= ucwords('more examples:')	?>
			<br>
			<br>
			
			<li>
						<strong>Job: </strong> <?= $task['title']; ?> <br>
					<li>
						<strong>Name: </strong> <?= $task['assigned_to']; ?> <br>
					</li>
					<li>
						<strong>Due: </strong> <?= $task['due']; ?> <br>
					</li>
					<li>
						<strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?> <br>
					</li>

			</li>


	</ul>	
</body>

</html>