<?php
    if(isLogged() == 1){
        header("Location:index.php?page=membres");
    }
?>


<?php
    if(isset($_POST['submit'])){
        extract($_POST);

        if (email_taken($email) == 1){
            $content = "L'adresse email est déjà utilisée...";
        } 
        
        if (mb_strlen($name) < 3 || mb_strlen($name) > 20 ) {
            $content .= "Saisir votre nom entre 3 et 20 caractères.<br>";
        } else if (1 !== preg_match('~^[a-zA-Z0-9_-]+$~', $name)) {
            $content .= "Votre nom ne peut contenir que des caractères non accentués, des chiffres, tirets et underscores.";
        } 
        
        if (!preg_match('/[a-z]/', $password)) {
            $content .= "Veuillez saisir un mot de passe avec une lettre minscule.<br>";
        } elseif (!preg_match('/[A-Z]/', $password)) {
            $content .= "Veuillez saisir un mot de passe avec une lettre majuscule.<br>";
        } elseif (!preg_match('/[0-9]/', $password)) {
            $content .= "Veuillez saisir un mot de passe avec un chiffre.<br>";
        } elseif (!preg_match('/[%!?*]/', $password)) {
            $content .= "Veuillez saisir un mot de passe avec un caractère spécial [%!?*].<br>";
        } elseif (iconv_strlen($password) < 10 || iconv_strlen($password) > 20) {
            $content .= "Veuillez saisir un mot de passe entre 10 et 20 caractères.<br>";
        } 
        
        if (empty($content)) {
            $password = sha1(htmlspecialchars(trim($_POST['password'])));
            register($name, $email, $password);
            $_SESSION['tchat'] = $email;
            header("Location:index.php?page=membres");
        }

        }

?>

<form method="post" id="regForm">
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
    <p class="error"><?php echo  $content ?></p>
    <button type="submit" name="submit">S'inscrire</button>


</form>