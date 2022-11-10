<header>
<div class="header">
            <div class="nav">
                <div class="nav-item nav-b"><a href="index.php"><b>Football tables</b></a></div>
                <?php for ($i = 0; $i < count($menu_list); $i++): ?>
                <div class="nav-item"><a href=<?php echo "./#",$menu_id[$i]?>><?php echo $menu_list[$i] ?></a></div>
                <?php endfor?>
            </div>
            <div class="nav">
                <div class="nav-item"><a href=<?php 
                    $link = "calculator.php";
                    $link_title = "Калькулятор";
                    echo $link
                ?>><?php echo $link_title ?></a></div>
                <div class="nav-item"><a href=<?php 
                    $link = "game.php";
                    $link_title = "Игра";
                    echo $link
                ?>><?php echo $link_title ?></a></div>
                <div class="nav-item"><a href=<?php 
                    $link = "feedback.php";
                    $link_title = "Обратная связь";
                    echo $link
                ?>><?php echo $link_title ?></a></div>
                <div class="nav-item"><a href=<?php 
                    $link = "login.php";
                    $link_title = "Вход";
                    echo $link
                ?>><?php echo $link_title ?></a></div>
            </div>
</header>
