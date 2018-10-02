<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
	<table>
	<?php
		$res = '';
		for ($i=0; $i < 10; $i++) { 
			$res .= '<tr>';
			for ($j=1; $j <= 10; $j++) {
				$res .= '<td>' . ($i*10+$j) . '</td>';
			}
			$res .= '</tr>';
		}
		echo $res;
	?>
	</table>
</body>
</html>