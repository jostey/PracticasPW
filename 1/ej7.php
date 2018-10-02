<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>
	<?php
		$v = [];
		for ($i=0; $i < 10; $i++) { 
			$v[] = $i*2;
		}
		foreach ($v as $n) {
			echo $n . '<br>';
		}
	?>
</body>
</html>