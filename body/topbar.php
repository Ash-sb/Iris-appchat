<div class="topbar">
    <a class="app-name" href="index.php">Iris</a>
    <span class="menu">
        <?php
            if(isLogged() == 1){
                ?>
                    <a href="index.php?page=membres" class="<?php echo ($page=='membres') ? 'active' : '' ?> connected">
                        <i class="icon fas fa-users fa-2x"></i>
                    </a>
                    <a class="connected" href="index.php?page=logout">
                    <i class="icon fas fa-sign-out-alt fa-2x"></i>
                    </a>
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