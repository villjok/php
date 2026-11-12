<?php
declare(strict_types=1);
/*
ЗАДАНИЕ 1
*/
$day = 7;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция match</title>
</head>
<body>
	<h1>Конструкция match</h1>
	<?php
	/*
	ЗАДАНИЕ 3
	*/
	echo match (true) {
		$day === 6 || $day === 7 => 'Это выходной день',
		$day >= 1 && $day <= 5 => 'Это рабочий день',
		default => 'Неизвестный день',
	};
	?> 
</body>
</html>
