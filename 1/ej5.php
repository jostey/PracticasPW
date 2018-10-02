<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
	<table>
	<?php
		define("TAM",10);
		$res = '';
		for ($i=0; $i < TAM; $i++) { 
			if ($i%2) {
				$res .= '<tr style="background-color: grey;">';
			} else {
				$res .= '<tr>';
			}
			
			for ($j=1; $j <= TAM; $j++) {
				$res .= '<td>' . ($i*TAM+$j) . '</td>';
			}
			$res .= '</tr>';
		}
		echo $res;
	?>
	</table>
</body>
</html>