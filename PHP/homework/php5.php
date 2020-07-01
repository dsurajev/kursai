<!DOCTYPE html>
<html lang="lt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 5 namų darbai.</title>
</head>

<body>
	<?php
		$cities3 = [
			'Tokijas' => ['13.6', '1868', 'Japonija'],
			'Vasingtonas' => ['0.6', '1790', 'JAV'],
			'Maskva' => ['11.5', '1147', 'Rusija']
		];

		$cities3['Londonas'] = ['8.6', '43', 'Anglija'];
	print_r ($cities3);
	?>

			<ul>
				<li>
					Gyentojų skaičius:
						<?php
							print_r ($cities3['Londonas'][0]);
						?>
					mln.
				</li>
				<li>
					Įkurtas
						<?php
							print_r ($cities3['Londonas'][1]);
						?>
					m.
				</li>
				<li>
					Šalis:
						<?php
							print_r ($cities3['Londonas'][2]);
						?>
				</li>
			</ul>

</body>
</html>
