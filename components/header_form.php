<header>
<div class="header">
            <div class="nav">
                <div class="nav-item nav-b"><a href="index.php"><b>Football tables</b></a></div>
                <?php for ($i = 0; $i < count($menu_list); $i++): ?>
                <div class="nav-item"><a href=<?php echo $pages_list[$i],'.php'?>><?php echo $menu_list[$i] ?></a></div>
                <?php endfor?>
            </div>
</header>