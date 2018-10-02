<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
	<table border=1>
		<?php
			function potencia($a,$b) {
				return pow($a,$b);
			}

			$res = '';
			for ($i=0; $i < 4; $i++) { 
				$res .= '<tr>';
				for ($j=1; $j <= 4; $j++) { 
					$res .= '<td>' . potencia($i+1,$j) . '</td>';
				}
				$res .= '</tr>';
			}
			echo $res;
		?>
	</table>
	
</body>
</html>