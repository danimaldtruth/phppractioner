<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Document</title>

	<style>

		header {
background: red;
text-align: center
		}

		body {
			
			background: pink;
			padding: 2em;
			color: purple;
			text-align: left;
			;
		}

	</style>
</head>

<body>
 <header>
 	<h1>List of my Crushes</h1>
 </header>

	<body>

		<h1>

			<ul>

				<?php

					foreach ($names as $name) : ?>






					

						<li><?= $name; ?></li>
					<?php endforeach; ?>


				




			</ul>

		</h1>

		</body>

</body>

</html>