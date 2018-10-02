<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 11 (Servidor)</title>
</head>
<body>
	<?php
		$res = $_POST['euro'];
		echo '<h1>EUR to USD</h1>';
		echo $res . '€ => ' . $res*1.15120 . '$';
	?>
</body>
</html>