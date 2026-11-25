<?php
declare(strict_types=1);
function isStrongPassword(string $password): bool
{
	if (strlen($password) < 8) {
		return false;
	}

	$hasUpper = preg_match('/[A-Z]/', $password) === 1;
	$hasLower = preg_match('/[a-z]/', $password) === 1;
	$hasDigit = preg_match('/[0-9]/', $password) === 1;

	return $hasUpper && $hasLower && $hasDigit;
}

$login    = ' User ';
$password = 'megaP@ssw0rd';
$name     = 'иван';
$email    = 'ivan@petrov.ru';
$code     = '<?=$login?>';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций обработки строк</title>
</head>
<body>

<?php
	$login = mb_strtolower(trim($login));
	echo '<p>Логин: ' . $login . '</p>';

	$isStrong = isStrongPassword($password);
	echo '<p>Пароль ' . ($isStrong ? 'сложный' : 'недостаточно сложный') . '</p>';

	$name = mb_strtoupper(mb_substr($name, 0, 1)) . mb_substr($name, 1);
	echo '<p>Имя: ' . $name . '</p>';

	$validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
	echo '<p>Email ' . ($validEmail !== false ? 'корректен' : 'некорректен') . '</p>';

	echo '<p>Код: ' . htmlspecialchars($code) . '</p>';
?>
</body>
</html>
