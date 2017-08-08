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
						<strong>Status: </strong>  

							<?php if ($task['completed']) {



								echo '&#9989;';


							}	else { echo 
								
								'&#9888; warning: you are not done';

								echo ' &#9888;';


						}


					?>
							

					</li>

			</li>


	</ul>	
</body>

</html>