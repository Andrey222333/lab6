<?php 
$title = "Написать отзыв";

$today = date("m.d.y");
$time = date("G:i:s");

$menu_list = ["Главная", "Обратная связь", "Вход"];
$pages_list = ["index", "feedback", "login"];

$login = "login";
$password = "password";
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
        <div class="div_home">
            <?php 
            if (isset($_POST['select'])){
                echo '<p>Ваш запрос принят</p>';
                echo '<p>Уважаемый, '.$_POST['fio'].', здравствуйте!</p>';
                if ($_POST['select'] == 'Предложение') {
                    echo '<p> Спасибо за ваше предложение:</p>';
                    echo '<p class="form_div"><textarea readonly disabled rows="10" cols="45">'.$_POST['text'].'</textarea></p>';
                } else {
                    echo '<p> Спасибо за вашу жалобу:</p>';
                    echo '<p class="form_div"><textarea readonly disabled rows="10" cols="45">'.$_POST['text'].'</textarea></p>';
                }

                if (isset($_POST['file']) && $_POST['file'] !=0) echo '<p>Вы приложили файл: '.$_POST['file'].'</p>';
                
                echo '<div><a href="feedback.php?FIO='.$_POST['fio'].'&EMAIL='.$_POST['email'].'&TEXT='.$_POST['text'].'&E='.$_POST['answer'].'"><button class="form_button">Заполнить снова</button></a><div>';

            } else {
                if(($_POST['login'] == $login) && ($_POST['password'] == $password)) {
                    echo '<p>Вы успешно авторизовались</p>';
                } else {
                    echo '<p>Неверный логин или пароль</p>';
                }
            }
            ?>
        </div>
    </main>
    <?php require('components/footer.php') ?>
</body>
</html>