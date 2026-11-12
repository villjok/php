<?php
declare(strict_types=1);
/*
ЗАДАНИЕ 1
*/
define('SITE_NAME', 'Портал студента');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	*/
	if (defined('SITE_NAME')) {
		echo 'Константа SITE_NAME существует. Значение: ' . SITE_NAME . '<br>';
	} else {
		echo 'Константа не определена<br>';
	}
	
	/*
	ЗАДАНИЕ 3
	*/
	echo 'Версия PHP: ' . PHP_VERSION . '<br>';
	echo 'Путь к директории: ' . __DIR__ . '<br>';
	?>
</body>
</html>
