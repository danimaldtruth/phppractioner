<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>About Me</title>

	
</head>

<body>
 <header>
 </header>

	
<body>
	<ul>
		<?php foreach ($person as $featuretype => $feature) : ?>

			<li><strong>My  <?= $featuretype?> is </strong> <?= $feature; ?> </li>

		<?php endforeach; ?>
	</ul<
</body>

</html>