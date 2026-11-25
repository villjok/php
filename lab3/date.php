<?php
declare(strict_types=1);

function getWelcome(int $hour): string
{
	if ($hour >= 0 && $hour < 6) {
		return 'Доброй ночи';
	} elseif ($hour >= 6 && $hour < 12) {
		return 'Доброе утро';
	} elseif ($hour >= 12 && $hour < 18) {
		return 'Добрый день';
	} elseif ($hour >= 18 && $hour < 23) {
		return 'Добрый вечер';
	}

	return 'Доброй ночи';
}

function getTimeUntilBirthday(int $birthdayTimestamp, int $nowTimestamp): array
{
	$diff = $birthdayTimestamp - $nowTimestamp;

	$days    = intdiv($diff, 86400);
	$hours   = intdiv($diff % 86400, 3600);
	$minutes = intdiv($diff % 3600, 60);
	$seconds = $diff % 60;

	return [
		'days'    => $days,
		'hours'   => $hours,
		'minutes' => $minutes,
		'seconds' => $seconds,
	];
}

$now = time();

$birthdayThisYear = mktime(0, 0, 0, 9, 1, (int)date('Y', $now));
$birthday = $birthdayThisYear > $now
	? $birthdayThisYear
	: mktime(0, 0, 0, 9, 1, (int)date('Y', $now) + 1);

$dateInfo = getdate($now);
$hour = $dateInfo['hours'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Использование функций даты и времени</title>
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
	$welcome = getWelcome($hour);
	echo '<p>' . $welcome . '</p>';

	setlocale(LC_TIME, 'ru_RU.UTF-8', 'ru_RU.utf8', 'ru_RU');

	if (class_exists('IntlDateFormatter')) {
		$formatter = new IntlDateFormatter(
			'ru_RU',
			IntlDateFormatter::LONG,
			IntlDateFormatter::LONG,
			null,
			IntlDateFormatter::GREGORIAN,
			"d MMMM y 'года, 'EEEE HH:mm:ss"
		);
		echo '<p>Сегодня ' . $formatter->format($now) . '</p>';
	} else {
		echo '<p>Сегодня ' . date('d.m.Y, H:i:s', $now) . '</p>';
	}

	echo '<p>До моего дня рождения осталось</p>';

	$remaining = getTimeUntilBirthday($birthday, $now);
	echo '<p>' . $remaining['days'] . ' дн. '
		. $remaining['hours'] . ' ч. '
		. $remaining['minutes'] . ' мин. '
		. $remaining['seconds'] . ' сек.</p>';
	?>
</body>
</html>
