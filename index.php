<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №1 - Лера</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px 20px;
            background: linear-gradient(160deg, #f0faf3 0%, #e2f4e8 100%);
            min-height: 100vh;
            color: #234030;
        }

        .container {
            max-width: 760px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 14px;
            padding: 30px 40px;
            box-shadow: 0 8px 24px rgba(34, 139, 87, 0.12);
            border-top: 5px solid #2e9e5b;
        }

        h1 {
            color: #1e7a45;
            margin-top: 0;
        }

        h2 {
            color: #2e9e5b;
            border-bottom: 2px dashed #b7e2c6;
            padding-bottom: 8px;
            margin-top: 32px;
        }

        hr {
            border: none;
            height: 1px;
            background: #cdeeda;
            margin: 16px 0;
        }

        ul {
            list-style-type: square;
            font-size: 18px;
            line-height: 1.8;
            padding-left: 24px;
        }

        li::marker {
            color: #3cb371;
        }

        a {
            color: #1e7a45;
            text-decoration: none;
            padding: 2px 4px;
            border-radius: 4px;
            transition: background 0.2s, color 0.2s;
        }

        a:hover {
            background: #d8f3e2;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Лабораторная работа №1</h1>
        <hr>
        <ul>
            <li><a href="phpinfo.php">1. Информация о PHP (phpinfo)</a></li>
            <li><a href="lab1/vars.php">2. Переменные и типы (vars.php)</a></li>
            <li><a href="lab1/if.php">3. Конструкции if-elseif-else (if.php)</a></li>
            <li><a href="lab1/switch.php">4. Конструкция switch (switch.php)</a></li>
            <li><a href="lab1/match.php">5. Конструкция match (match.php)</a></li>
            <li><a href="lab1/array.php">6. Массивы (array.php)</a></li>
            <li><a href="lab1/constant.php">7. Константы (constant.php)</a></li>
        </ul>

        <h2>Лабораторная работа №2 (Циклы и функции)</h2>
        <ul>
            <li><a href="lab2/for.php">1. Цикл for (нечетные числа)</a></li>
            <li><a href="lab2/while.php">2. Цикл while (вывод слова)</a></li>
            <li><a href="lab2/table.php">3. Таблица умножения (table.php)</a></li>
            <li><a href="lab2/menu.php">4. Меню через foreach (menu.php)</a></li>
            <li><a href="lab2/swap.php">5. Функции swap и map (functions.php)</a></li>
            <li><a href="lab2/gettable.php">6. Функция getTable (gettable.php)</a></li>
            <li><a href="lab2/getmenu.php">7. Функция getMenu (getmenu.php)</a></li>
        </ul>
    </div>
</body>
</html>
