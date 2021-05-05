<div class="topbar">
    <a class="app-name" href="index.php">Iris</a>
    <span class="menu">
        <?php
            if(isLogged() == 1){
                ?>
                    <button><a href="index.php?page=membres" class="<?php echo ($page=='membres') ? 'active' : '' ?>">Membres</a></button>
                    <button><a href="index.php?page=logout">Déconnexion</a></button>
                <?php
            }else{
                ?>
                    <button id="btn-connexion"><a href="index.php?page=signin" class="<?php echo ($page=='signin') ? 'active' : '' ?>">Connexion</a></button>
                    <button id="btn-inscription"><a href="index.php?page=register" class="<?php echo ($page=='register') ? 'active' : '' ?>">Inscription</a></button>
                    
                <?php
            }
        ?>
    </span>
</div>