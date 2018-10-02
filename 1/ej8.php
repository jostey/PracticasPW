<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 8</title>
</head>
<body>
	<?php
		$v[1]=90;
		$v[30]=7;
		$v['e']=99;
		$v['hola']=43;

		foreach ($v as $n) {
			echo $n . '<br>';
		}
	?>
</body>
</html>