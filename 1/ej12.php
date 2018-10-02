<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 12 (Servidor)</title>
</head>
<body>
	<?php
		$money = $_POST['euro'];
		$moneda = $_POST['moneda'];

		if ($moneda == 1) {
			echo '<h1>EUR to USD</h1>';
			echo $money . '€ => ' . $money*1.15120 . '$';
		} else {
			echo '<h1>EUR to GBP</h1>';
			echo $money . '€ => ' . $money*0.89 . '£';
		}
	?>
</body>
</html>