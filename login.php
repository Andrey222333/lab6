<?php
$title = "Вход";

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
            <form class="form" name="test" method="post" action="home.php">
                <h1 class="form_title">Вход</h1>
                <div class="form_group">
                    <input class="form_input" type = "text" name="login" placeholder=" " >
                    <label class="form_label">Логин</label>
                </div>
                <div class="form_group">
                    <input class="form_input" type="password" name="password" placeholder=" ">
                    <label class="form_label">Пароль</label>
                </div>
                <p class="form_checkbox"><input class="checkbox" type="checkbox" name="checkbox" value="запомнить меня">запомнить меня<p>
                <input class="form_button" type="submit" value="Вход">
            </form>
        </div>
    </main>
    <?php require('components/footer.php') ?>
</body>
</html>