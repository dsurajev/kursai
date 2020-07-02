<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 11 HW.</title>
</head>

<body>
		<form>
			<input type="number" name="rect-width" placeholder="Width">
			<input type="number" name="rect-height" placeholder="Height">
			<input type="submit">
		</form>

		<?php
			$rectWidth = $_GET['rect-width'];
			$rectHeight = $_GET['rect-height'];

			function totalArea($rectWidth, $rectHeight) {
				$rectTotalArea = $rectWidth * $rectHeight;
				echo "plotas yra: $rectTotalArea";
			}
			totalArea ($rectWidth, $rectHeight);
		?>
</body>
</html>
