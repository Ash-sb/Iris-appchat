<?php
    if(isLogged() == 1){
        header("Location:index.php?page=membres");
    }
?>

<h2 class="header">Rejoignez Iris aujourd'hui !</h2>

<?php

    if(isset($_POST['submit'])){
        $email = htmlspecialchars(trim($_POST['email']));
        $password = sha1(htmlspecialchars(trim($_POST['password'])));

        if(user_exist($email,$password) == 1){
            $_SESSION['tchat'] = $email;
            header("Location:index.php?page=membres");
        }else{
            $error_user_not_found = "L'adresse email ou le mot de passe est incorrect";
        }


    }

?>

<?php
//vérif mot de passe
    if (preg_match('/[a-z]/', $mdp)) { 
        if (preg_match('/[A-Z]/', $mdp)) {
            if (preg_match('/[0-9]/', $mdp)) {
                if (preg_match('/[%!?*]/', $mdp)) {
                    if (iconv_strlen($mdp) < 10 || iconv_strlen($mdp) > 20) {
                        $content .= "Veuillez saisir un mot de passe entre 10 et 20 caractères.<br>";
                    }
                } else {
                    $content .= "Veuillez saisir un mot de passe avec un caractère spécial [%!?*].<br>";
                }
            } else {
                $content .= "Veuillez saisir un mot de passe avec un chiffre.<br>";
            }
        } else {
            $content .= "Veuillez saisir un mot de passe avec une lettre majuscule.<br>";
        }
    } else {
        $content .= "Veuillez saisir un mot de passe avec une lettre minuscule.<br>";
    }
    
    if (!preg_match('/'.$confirmdp.'/',$mdp)){
        $content .= "Les mots de passe ne correspondent pas.<br>";
    }

?>

<form method="post" id="logForm">

    <div class="field">
        <label class="field-label" for="email">Votre adresse email</label>
        <input class="field-input" type="email" name="email" id="email"/>
    </div>

    <div class="field">
        <label class="field-label" for="password">Votre mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div>
    <p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : ''; ?></p>
    <button type="submit" name="submit">Se connecter</button>

</form>