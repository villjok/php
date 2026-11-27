<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Константы PHP</title>
</head>
<body>
    <h1>Все определенные константы PHP</h1>
    <?php
    $allConstants = get_defined_constants(true);

    foreach ($allConstants as $module => $constants) {
        echo "<div>";
        echo "<h2>Модуль: " . htmlspecialchars($module) . "</h2>";
        
        foreach ($constants as $name => $value) {
            $displayValue = is_array($value) || is_object($value) ? print_r($value, true) : $value;
            if (is_bool($value)) {
                $displayValue = $value ? 'true' : 'false';
            } elseif (is_null($value)) {
                $displayValue = 'null';
            } elseif (is_string($value)) {
                $displayValue = "'" . htmlspecialchars($value) . "'";
            }
            
            echo "<div>";
            echo "<span>" . htmlspecialchars($name) . "</span> = ";
            echo "<span>" . htmlspecialchars((string)$displayValue) . "</span>";
            echo "</div>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>
