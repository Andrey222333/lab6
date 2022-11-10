<?php
$title = "Калькулятор";

$today = date("m.d.y");
$time = date("H:i:s");

$menu_list = ["Главная", "Обратная связь", "Вход"];
$pages_list = ["index", "feedback", "login"];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('components/head.php') ?>
    <title><?php echo $title ?></title>
</head>
<body class="body_login">
    <?php require('components/header_form.php') ?>
    <main>
        <div class="form_body">
            <div class="container">
                <div class="item_calculator input">
                    <form class="form_calculator" name="formcalc">
                        <input class="input_calculator" type="text" name="textcalc">
                    </form>
                </div>
                <button class="item_calculator clear">C</button>
                <button class="item_calculator numeric">(</button>
                <button class="item_calculator numeric">)</button>
                <button class="item_calculator numeric">*</button>
                <button class="item_calculator">7</button>
                <button class="item_calculator">8</button>
                <button class="item_calculator">9</button>
                <button class="item_calculator numeric">/</button>
                <button class="item_calculator">4</button>
                <button class="item_calculator">5</button>
                <button class="item_calculator">6</button>
                <button class="item_calculator numeric">-</button>
                <button class="item_calculator">1</button>
                <button class="item_calculator">2</button>
                <button class="item_calculator">3</button>
                <button class="item_calculator numeric">+</button>
                <button class="item_calculator zero">0</button>
                <button class="item_calculator">.</button>
                <button class="item_calculator result">=</button>
            </div>
        </div>
    </main>
    <?php require('components/footer.php') ?>
</body>
<script src="brainCalculator.js"></script>
</html>