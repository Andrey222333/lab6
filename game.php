<?php 
$title = "Игра";

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
    <main class="main_home">
        <div class="div_game">Игра</div>
    </main>
    <?php require('components/footer.php') ?>
</body>
<script src="game.js"></script>
</html>