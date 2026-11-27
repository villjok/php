<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загруженные модули и функции</title>
</head>
<body>
    <h1>Загруженные модули и их функции</h1>
    <?php
    $extensions = get_loaded_extensions();
    $totalFunctions = 0;

    foreach ($extensions as $ext) {
        $functions = get_extension_funcs($ext);
        
        echo "<div>";
        echo "<h3>Модуль: " . htmlspecialchars($ext) . " (функций: " . ($functions ? count($functions) : 0) . ")</h3>";
        
        if ($functions) {
            $totalFunctions += count($functions);
            echo "<div>" . implode(', ', $functions) . "</div>";
        } else {
            echo "<div>Нет функций (или они встроены иначе)</div>";
        }
        echo "</div>";
    }

    echo "<div>Общее количество функций: " . $totalFunctions . "</div>";
    ?>
</body>
</html>
