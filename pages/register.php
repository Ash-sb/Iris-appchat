<?php
    if(isLogged() == 1){
        header("Location:index.php?page=membres");
    }
?>


<?php
    if(isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = sha1(htmlspecialchars(trim($_POST['password'])));

        if(email_taken($email) == 1){
            $error_email = "L'adresse email est déjà utilisée...";
        } else if (mb_strlen($name) < 3 || mb_strlen($name) > 20 ) {
            $content .= "Saisir votre nom entre 3 et 20 caractères.<br>";
        } else if (1 !== preg_match('~^[a-zA-Z0-9_-]+$~', $name)) {
            $content .= "Votre nom ne peut contenir que des caractères non accentués, des chiffres, tirets et underscores.";
        } else if (preg_match('/[a-z]/', $mdp)) {
            $content .= "Veuillez saisir un mot de passe avec une lettre minuscule.<br>";
        } else if (preg_match('/[A-Z]/', $mdp)) {
            $content .= "Veuillez saisir un mot de passe avec une lettre majuscule.<br>";
        } else if (preg_match('/[0-9]/', $mdp)) {
            $content .= "Veuillez saisir un mot de passe avec un chiffre.<br>";
        } else if (preg_match('/[%!?*]/', $mdp)) {
            $content .= "Veuillez saisir un mot de passe avec un caractère spécial [%!?*].<br>";
        } else if (iconv_strlen($mdp) < 10 || iconv_strlen($mdp) > 20) {
            $content .= "Veuillez saisir un mot de passe entre 10 et 20 caractères.<br>";
        } else{
            register($name, $email, $password);
            $_SESSION['tchat'] = $email;
            header("Location:index.php?page=membres");
        }

        }

?>

<form method="post" id="regForm">
<?php echo $content ?>
<h2 class="header header-form">S'inscrire</h2>
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