<?php
$title = "Footballtables";

$today = date("m.d.y");
$time = date("H:i:s");

$text;
$name; 
$s = date("s");
$os = $s % 2;

if ($os == 0) {
    $name = "img/promes.png";
    $text = "РПЛ";
} else {
    $name = "img/holand.png";
    $text = "АПЛ";
}

$menu_list = ["АПЛ", "Бундеслига", "РПЛ"];
$menu_id = ["apl", "budesliga", "rpl"];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('components/head.php') ?>
    <title><?php echo $title ?></title>
</head>
<body class="body_index">
    <?php require('components/header.php') ?>
    <main class="main">
        <div class="img-container">
            <img class="imgclub" src="img/apl.png" width="80">
            <span class="championship" id="apl">Чемпионат Англии</span>
            <div>Сезон 2022/2023</div>
        </div>
        <div class="styletable">
            <table class="tables">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="left">Положение команд</th>
                        <th>Игры</th>
                        <th>Мячи</th>
                        <th>Очки</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="left">Арсенал</td>
                        <td>7</td>
                        <td>17-7</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td  class="left">Манчестер Сити</td>
                        <td>7</td>
                        <td>23-6</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td  class="left">Тоттенхэм Хотспур</td>
                        <td>7</td>
                        <td>18-7</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td  class="left">Брайтон энд Хоув Альбион</td>
                        <td>6</td>
                        <td>11-5</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td  class="left">Манчестер Юнайтед</td>
                        <td>6</td>
                        <td>8-8</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td  class="left">Фулхэм</td>
                        <td>7</td>
                        <td>12-11</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="left">Челси</td>
                        <td>6</td>
                        <td>8-9</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="left">Ливерпуль</td>
                        <td>6</td>
                        <td>15-6</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td class="left">Брентфорд</td>
                        <td>7</td>
                        <td>15-12</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td class="left">Ньюкасл Юнайтед</td>
                        <td>7</td>
                        <td>8-7</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="left">Лидс Юнайтед</td>
                        <td>6</td>
                        <td>10-10</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td class="left">Борнмут</td>
                        <td>7</td>
                        <td>6-19</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td class="left">Эвертон</td>
                        <td>7</td>
                        <td>5-6</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td class="left">Саутгемптон</td>
                        <td>7</td>
                        <td>7-11</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td class="left">Астон Вилла</td>
                        <td>7</td>
                        <td>6-10</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td class="left">Кристал Пэлас</td>
                        <td>6</td>
                        <td>7-9</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td class="left">Вулверхэмптон Уондерерс</td>
                        <td>7</td>
                        <td>3-7</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td class="left">Вест Хэм Юнайтед</td>
                        <td>7</td>
                        <td>3-9</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td class="left">Ноттингем Форест</td>
                        <td>7</td>
                        <td>6-17</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td class="left">Лестер Сити</td>
                        <td>7</td>
                        <td>10-22</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="img-container">
            <img class="imgclub" src="img/bundesliga.png" width="80">
            <span class="championship" id="budesliga">Чемпионат Германии</span>
            <div>Сезон 2022/2023</div>
        </div>
        <div class="styletable">
            <table class="tables">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="left">Положение команд</th>
                        <th>Игры</th>
                        <th>Мячи</th>
                        <th>Очки</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="left">Унион(Берлин)</td>
                        <td>7</td>
                        <td>15-4</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td  class="left">Борусия(Дортмунд)</td>
                        <td>7</td>
                        <td>9-7</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td  class="left">Фрайбург</td>
                        <td>7</td>
                        <td>10-5</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td  class="left">Хоффенхайм</td>
                        <td>7</td>
                        <td>12-7</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td  class="left">Бавария</td>
                        <td>7</td>
                        <td>19-6</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td  class="left">Борусия(Мёнхенгладбах)</td>
                        <td>7</td>
                        <td>10-5</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="left">Айнтрахт</td>
                        <td>7</td>
                        <td>14-13</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="left">Майнц 05</td>
                        <td>7</td>
                        <td>7-10</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td class="left">Кёльн</td>
                        <td>7</td>
                        <td>11-8</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td class="left">Вердер</td>
                        <td>7</td>
                        <td>13-12</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="left">Аугсбург</td>
                        <td>7</td>
                        <td>5-10</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td class="left">РБ Лейбциг</td>
                        <td>7</td>
                        <td>9-12</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td class="left">Герта</td>
                        <td>7</td>
                        <td>7-9</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td class="left">Шальке-04</td>
                        <td>7</td>
                        <td>8-14</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td class="left">Байер</td>
                        <td>7</td>
                        <td>9-12</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td class="left">Штутгарт</td>
                        <td>7</td>
                        <td>7-10</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td class="left">Вольфсбург</td>
                        <td>7</td>
                        <td>5-12</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td class="left">Бохум</td>
                        <td>7</td>
                        <td>5-19</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="img-container">
            <img class="imgclub" src="img/rpl.png" width="80">
            <span class="championship" id="rpl">Чемпионат России</span>
            <div>Сезон 2022/2023</div>
        </div>
        <div class="styletable">
            <table class="tables">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="left">Положение команд</th>
                        <th>Игры</th>
                        <th>Мячи</th>
                        <th>Очки</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="left">Зенит</td>
                        <td>10</td>
                        <td>29-3</td>
                        <td>26</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td  class="left">Ростов</td>
                        <td>10</td>
                        <td>19-12</td>
                        <td>22</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td  class="left">ЦСКА</td>
                        <td>10</td>
                        <td>21-9</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td  class="left">Краснодар</td>
                        <td>10</td>
                        <td>21-14</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td  class="left">Спартак</td>
                        <td>10</td>
                        <td>22-11</td>
                        <td>19</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td  class="left">Сочи</td>
                        <td>10</td>
                        <td>17-16</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="left">Динамо</td>
                        <td>10</td>
                        <td>16-11</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="left">Ахмат</td>
                        <td>10</td>
                        <td>15-16</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td class="left">Орегбург</td>
                        <td>10</td>
                        <td>14-26</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td class="left">Пари Нижний Новгород</td>
                        <td>10</td>
                        <td>16-18</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="left">Крылья советов</td>
                        <td>10</td>
                        <td>10-14</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td class="left">Локомотив</td>
                        <td>10</td>
                        <td>13-18</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td class="left">Химки</td>
                        <td>10</td>
                        <td>11-19</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td class="left">Факел</td>
                        <td>10</td>
                        <td>13-20</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td class="left">Урал</td>
                        <td>10</td>
                        <td>5-19</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td class="left">Торпедо(Москва)</td>
                        <td>10</td>
                        <td>5-21</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="bombardir"><?php echo 'Лучший бомбардир ', $text, ':' ?></div>
        <div class="img_bombardir"><img src=<?php echo $name ?> height="500"></div>
    </main>
    <?php require('components/footer.php') ?>
</body>
</html>

