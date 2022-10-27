<?php
$title = "Обратная связь";

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
        <div class="form_feedback">
            <form class="form_2" name="test" action="home.php" method="post">
                <div class="form_group">
                    <input class="form_input" type="text" id="fio" name="fio" placeholder=" " value=<?php 
                        if(isset($_GET["FIO"])){
                            echo $_GET["FIO"];
                        } else {
                            echo "";
                        }
                    ?>>
                    <label class="form_label">ФИО</label>
                </div>
                <div class="form_group">
                    <input class="form_input" type="email" id="email" name="email" placeholder=" " value=<?php 
                        if(isset($_GET["EMAIL"])){
                            echo $_GET["EMAIL"];
                        } else {
                            echo "";
                        }
                    ?>>
                    <label class="form_label">Email</label>
                </div>
                <div class="form_div">
                    <p class="form_radio padding">Как вы узнали о нас?</p>
                    <p class="form_radio"><input type="radio" id="r1" name="answer" value="На работе"
                    <?php 
                        if (isset($_GET['E']) && $_GET['E'] == 'На работе') {
                            echo 'checked';
                        }
                    ?>>На работе</p>
                    <p class="form_radio padding"><input type="radio" id="r2" name="answer" value="От друpей"
                    <?php 
                        if (isset($_GET['E']) && $_GET['E'] == 'От друpей') {
                            echo 'checked';
                        }
                    ?>>От друзей</p>
                    <p class="form_radio"><input type="radio" id="r3" name="answer" value="В объявлении"
                    <?php 
                        if (isset($_GET['E']) && $_GET['E'] == 'В объявлении') {
                            echo 'checked';
                        }
                    ?>>В объявлении</p>
                </div>
                <div class="form_div">
                    <select class="form_select" name="select" id="select">
                        <option disabled>Тип обращения</option>
                        <option selected value="Жалоба">Жалоба</option>
                        <option selected value="Предложение">Предложение</option>
                    </select>
                </div>
                <p class="form_div"><textarea rows="10" cols="45" name="text" id="text"><?php 
                    if (isset($_GET["TEXT"])) {
                        echo $_GET["TEXT"];
                    }else {
                        echo "";
                    }
                ?></textarea></p>
                <p class="form_div"><input type="file" name="file"></p>
                <p class="form_checkbox"><input class="checkbox" type="checkbox" name="check" value="Даю согласие на обработку персональных данных">Даю согласие на обработку персональных данных</p>
                <p class="form_div"><input class="form_button" type="submit" value="Отправить"></p>
            </form>
        </div>
    </main>
    <?php require('components/footer.php') ?>
    <body>
<html>