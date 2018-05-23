<!DOCTYPE html>
<html>
<head>
	<title>About Nurain Haider's Practice on Laravel</title>
</head>
<body>
	<h1>Eikhane chole esho amake dekte hole, kemon?</h1>
	<h2>Tumar naam ta ki btw?</h2>
	<h3> <?php echo $name?> Naki, hmn?</h3>
	<h3>Taile following tasks korba, okay></h3>
	<ul>
		<?php  foreach ($tor_khams as $task):?>
	 		<li><?= $task; ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>