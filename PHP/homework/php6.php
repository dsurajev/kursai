<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP 6 namų darbai.</title>
	</head>

	<body>
		<?php
			$cities3 = [
				'Tokijas' => ['13.6', '1868', 'Japonija'],
				'Vasingtonas' => ['0.6', 1790	, 'JAV'],
				'Maskva' => ['11.5', '1147', 'Rusija']
			];

			$cities3['Londonas'] = ['8.6', '43', 'Anglija'];

			$metai = 1774;
			$ikiVasingtonoLiko = $cities3['Vasingtonas'][1] - $metai;

			if ($metai >= $cities3['Vasingtonas'][1]) {
				echo "Vašingtonas yra JAV sostinė.";
			} elseif ($metai == 1774) {
				echo "JAV sostinė vis dar Filadelfijoje";
			} else {
				echo "Liko " .$ikiVasingtonoLiko. " metai (-ų) iki Vašingtono įkūrimo.";
			}
		?>
	</body>
</html>
