<?php
    if(isLogged() == 1){
        header("Location:index.php?page=membres");
    }
?>

<h2 class="header header-form">S'inscrire</h2>

<?php
    if(isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = sha1(htmlspecialchars(trim($_POST['password'])));

        if(email_taken($email) == 1){
            $error_email = "L'adresse email est déjà utilisée...";
        }else{
            register($name, $email, $password);
            $_SESSION['tchat'] = $email;
            header("Location:index.php?page=membres");
        }

        //vérif mot de passe
    if (preg_match('/[a-z]/', $password)) { 
        if (preg_match('/[A-Z]/', $password)) {
            if (preg_match('/[0-9]/', $password)) {
                if (preg_match('/[%!?*]/', $password)) {
                    if (iconv_strlen($password) < 10 || iconv_strlen($password) > 20) {
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
    

    // L'inscription a fonctionné si aucun message d'erreur est affiché
    if (empty($content)){ 
        $content .= "Vous êtes inscrit !";
        $mdpCrypt = password_hash($password, PASSWORD_DEFAULT);

        //Mettre les données du formulaire dans la base de données.
        $queryInsert = "INSERT INTO user (name_user,email_user,password_user) VALUES (?,?,?)";
        $inscription = $pdo->prepare($queryInsert);
        $inscription->execute(
            [
                $name,
                $email,
                $passwordCrypt
            ]
        );
    }
    }

?>

<form method="post" id="regForm">

    <div class="field">
        <label class="field-label" for="name">Votre nom</label>
        <input class="field-input" type="text" name="name" id="name"/>
    </div>

    <div class="field">
        <label class="field-label" for="email">Votre adresse email</label>
        <input class="field-input" type="email" name="email" id="email"/>
    </div>

    <div class="field">
        <label class="field-label" for="password">Votre mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div>
    <p class="error"><?php echo (isset($error_email)) ? $error_email : ''; ?></p>
    <button type="submit" name="submit">S'inscrire</button>


</form>