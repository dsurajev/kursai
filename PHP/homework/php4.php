<!DOCTYPE html>
<html lang="lt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php4 namų darbai.</title>
</head>

<body>
	<div>
	<?php

	$cities = ['Berlynas', 'Roma', 'Londonas'];
	$cities[] = 'Tokijas';


	print_r($cities);
	?>
	<ul>
		<li>
			<?php
				echo($cities)[1];
			?>
		</li>
	</ul>
	</div>
	<div>
		<?php
		$cities2 = [
		'Tokijas' => '13.6',
		'Vašingtonas' => '0.6',
		'Maksva' => '11.5'
		];

		$cities2['Londonas'] = '8.6';

		print_r($cities2);
		?>
		<ul>
			<li> Gyventojų skaičius:
				<?php
				print_r($cities2['Tokijas']);
				?>
			</li>
		</ul>



	</div>
</body>
</html>


