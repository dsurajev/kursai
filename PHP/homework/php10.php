<!DOCTYPE html>
	<html lang="lt">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>PHP10 namų darbai.</title>
		</head>

		<body>
			<?php
				function plotas($a, $b) {
					$visasPlotas = $a * $b;
					echo "Stačiakampio plotas yra: $visasPlotas";
				}

				plotas(10,15);
			?>
		</body>
	</html>
