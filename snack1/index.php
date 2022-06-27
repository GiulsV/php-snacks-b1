<!-- Snack 1 (visto a lezione)
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->



<?php $matches = [
	[
		"homeTeam" => "Squadra 1",
		"guestTeam" => "Squadra 2",
		"homePoints" => "55",
		"guestPoints" => "62"
	],
	[
		"homeTeam" => "Squadra 3",
		"guestTeam" => "Squadra 4",
		"homePoints" => "43",
		"guestPoints" => "60"
	],
	[
		"homeTeam" => "Squadra 5",
		"guestTeam" => "Squadra 6",
		"homePoints" => "72",
		"guestPoints" => "40"
	],
	[
		"homeTeam" => "Squadra 7",
		"guestTeam" => "Squadra 8",
		"homePoints" => "56",
		"guestPoints" => "55"
	]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
</head>
<body>
<h2>Snack 1</h2>
<?php
	for ($i = 0; $i < count($matches); $i++) {
		$element = $matches[$i];
		echo $element["homeTeam"] . " - " . $element["guestTeam"] . " | " . $element["homePoints"] . "-" . $element["guestPoints"] . "<br>";
	};
?>

</body>
</html>