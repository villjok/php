<?php
declare(strict_types=1);
/*
ЗАДАНИЕ 1
*/
$name = 'Лера';
$age = 20;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Переменные и вывод</title>
</head>
<body>
	<h1>Переменные и вывод</h1>
    <p>
    Меня зовут: <?= $name ?> <br>
	Мне <?= $age ?> лет<br>
	Тип переменной \$name: <?= gettype($name) ?> <br>
	Тип переменной \$age: <?= gettype($name) ?> <br>	
    </p>
	<?php
	/*
	ЗАДАНИЕ 2
	*/
	unset($name, $age);
	?> 
</body>
</html>
