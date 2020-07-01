<!DOCTYPE html>
	<html lang="lt">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>PHP3 namų darbai</title>
		</head>

		<body>
					<?php
			$x = 10;
			$y = 7;
			$sum = $x + $y;
			$subtract = $x - $y;
			$multiply = $x * $y;
			$divide = $x / $y;
			$modulo = $x % $y;

			echo $x .'+' .$y .'=' .$sum;
			echo '<br>';
			echo $x .'-' .$y .'=' .$subtract;
			echo '<br>';
			echo $x .'*' .$y .'=' .$multiply;
			echo '<br>';
			echo $x .'/' .$y .'=' .$divide;
			echo '<br>';
			echo $x .'%' .$y .'=' .$modulo;
		?>


		</body>
	</html>
