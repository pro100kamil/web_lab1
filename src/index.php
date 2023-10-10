<?php
session_start();
if (!array_key_exists("data", $_SESSION) || !array_key_exists("start_k", $_SESSION)) {
    $_SESSION["data"] = array();
    $_SESSION["start_k"] = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab1 главная</title>
    <link rel="shortcut icon" href="images/biscuit.png" type="image/x-icon"/>
    <style>
        * {
            margin: 0;
            padding: 0;
            color: black;
            text-align: center;
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

        .content p, .content b {
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

        .content > form, .sidebar {
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

    <div class="content">
        <form action="table.php" method="post">
            <p>
                <b>Координата X</b> <br>
                <input type="radio" name="param_x" id="value-5" value="-5">-5 <br>
                <input type="radio" name="param_x" id="value-4" value="-4">-4 <br>
                <input type="radio" name="param_x" id="value-3" value="-3">-3 <br>
                <input type="radio" name="param_x" id="value-2" value="-2">-2 <br>
                <input type="radio" name="param_x" id="value-1" value="-1">-1 <br>
                <input type="radio" name="param_x" id="value0" value="0"> 0 <br>
                <input type="radio" name="param_x" id="value1" value="1"> 1 <br>
                <input type="radio" name="param_x" id="value2" value="2"> 2 <br>
                <input type="radio" name="param_x" id="value3" value="3"> 3 <br>
            </p>
            <p>
                <b>Координата Y (-3:5)</b> <br>
                <input type="text" name="param_y" id="param_y"
                       placeholder="Введите y">
            </p>
            <p>
                <b>Параметр R</b> <br>
                <input type="checkbox" name="param_r" id="rvalue1" value="1">1 <br>
                <input type="checkbox" name="param_r" id="rvalue2" value="2">2 <br>
                <input type="checkbox" name="param_r" id="rvalue3" value="3">3 <br>
                <input type="checkbox" name="param_r" id="rvalue4" value="4">4 <br>
                <input type="checkbox" name="param_r" id="rvalue5" value="5">5 <br>
            </p>
            <p>
                <input type="submit" value="Отправить" id="submit">
            </p>
        </form>
    </div>

    <div class="sidebar">
        <img src="images/graphic.png" id="graphic" alt="График">
    </div>

    <script src="main.js"></script>
</div>
</body>
</html>