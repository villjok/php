<?php
declare(strict_types=1);
function formatConstantValue(mixed $value): string
{
	if (is_array($value)) {
		return print_r($value, true);
	}
	if (is_object($value)) {
		return print_r($value, true);
	}
	if (is_bool($value)) {
		return $value ? 'true' : 'false';
	}
	if ($value === null) {
		return 'null';
	}
	if (is_string($value)) {
		return "'" . $value . "'";
	}
	return (string)$value;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Константы PHP</title>
    <style>
        body { font-family: monospace; background: #f4f4f4; }
        .group { background: #fff; padding: 10px; margin-bottom: 20px; border-radius: 5px; box-shadow: 0 0 5px rgba(0,0,0,0.1); }
        h2 { color: #2A4F6F; border-bottom: 2px solid #2A4F6F; }
        .const-item { margin-bottom: 5px; }
        .const-name { font-weight: bold; color: #0056b3; }
        .const-value { color: #333; }
        .summary { background: #2A4F6F; color: #fff; padding: 8px 14px; border-radius: 5px; display: inline-block; margin-bottom: 15px; }
    </style>
</head>
<body>
    <h1>Все определенные константы PHP</h1>
    <?php
    $allConstants = get_defined_constants(true);

    $totalCount = 0;
    foreach ($allConstants as $constants) {
        $totalCount += count($constants);
    }
    echo "<div class='summary'>Всего констант: " . $totalCount . "</div>";

    foreach ($allConstants as $module => $constants) {
        echo "<div class='group'>";
        echo "<h2>Модуль: " . htmlspecialchars($module) . " (" . count($constants) . ")</h2>";

        foreach ($constants as $name => $value) {
            echo "<div class='const-item'>";
            echo "<span class='const-name'>" . htmlspecialchars($name) . "</span> = ";
            echo "<span class='const-value'>" . htmlspecialchars(formatConstantValue($value)) . "</span>";
            echo "</div>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>
