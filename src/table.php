<?php
session_start();
include_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab1 таблица</title>
    <link rel="shortcut icon" href="images/biscuit.png" type="image/x-icon"/>
    <style>
        * {
            margin: 0;
            padding: 0;
            color: black;
            text-align: center;
            font-size: 18px;
        }

        body { /*селектор элемента*/
            background-color: #ABACA5;
        }

        .header {
            background-color: #FFFFE0;
            height: 100px;
            margin-bottom: 10px;
            padding: 10px;
        }

        .header h2 { /*селектор потомка*/
            color: #600113;
            font-size: 20px;
            font-family: 'Consolas', 'Menlo', 'DejaVu Sans Mono', 'Bitstream Vera Sans Mono', monospace;
        }

        .header h2:hover {
            color: #1e000e;
            font-size: 22px;
        }

        .content {
            min-height: 200px;
            width: 58%;
            float: left;
        }

        .content td {
            color: black;
            font-size: 18px;
        }

        .sidebar {
            min-height: 200px;
            width: 38%;
            float: left;
        }

        img#graphic {
            border: 1px white solid;
        }

        img#graphic:hover { /*селектор псевдокласса*/
            border: 2px #1e000e solid;
        }

        input#param_y::placeholder { /*селектор псевдоэлемента*/
            color: #1e000e;
        }

        input[type=text]:hover { /*селектор атрибута*/
            border: 1px #1e000e solid;
        }

        th, td {
            padding: 10px;
        }

        td:hover {
            font-style: italic;
        }

        .content > table, .sidebar {
            margin: 10px auto;
        }

        @media (max-width: 770px) {
            .content, .sidebar {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Галлямов Камиль Рустемович</h2>
        <h2>P3210</h2>
        <h2>Вариант: 367149</h2>
    </div>
    <?php
    date_default_timezone_set("Europe/Moscow");
    echo "Текущее время: " . date('d.m.Y H:i:s') . "."; ?>
    <br>


    <?php
    $start = microtime(true);
    if (array_key_exists("param_x", $_POST) && array_key_exists("param_y", $_POST)
        && array_key_exists("param_r", $_POST)) {
        $x = $_POST["param_x"];
        $y = $_POST["param_y"];
        $r = $_POST["param_r"];
        if (validate($x, $y, $r)) {
            addToData($x, $y, $r);
        }
    }
    $time = microtime(true) - $start;
    echo "Время выполнения скрипта: " . round($time * 1000, 5) . " мс.";
    ?>
    <br>
    <br>

    <div class="content">
        <table border="1">
            <caption>Таблица попаданий</caption>
            <tr>
                <th>X</th>
                <th>Y</th>
                <th>R</th>
                <th>Есть попадание</th>
            </tr>
            <?php
            if (array_key_exists("data", $_SESSION)) {
                for ($i = 0; $i < count($_SESSION["data"]); $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < count($_SESSION["data"][$i]); $j++) {
                        echo "<td>" . $_SESSION["data"][$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>

    <div class="sidebar">
        <img src="images/graphic.png" id="graphic" alt="График">
        <br>
        <p><a href="index.php">На главную</a></p>
    </div>
</div>
</body>
</html>