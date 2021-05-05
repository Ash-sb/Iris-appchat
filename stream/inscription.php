
<?php
// pour essayer le code
try {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=livestream;', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
    ]);
} 
// en cas d'erreur 
catch (PDOException $e) {
    die('<ul><li>Erreur sur le fichier : ' . $e->getFile() . '</li><li>Erreur à la ligne ' . $e->getLine() . '</li><li>Message d\'erreur : ' . $e->getMessage() . '</li></ul>');
}


$content = "";

if (isset($_POST['envoyer']) && $_POST['envoyer'] == "Envoyer"){
    // Mettre les indices en variables
    extract($_POST); 

    // Les vérifications
    
    // vérif mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $content .= "Veuillez saisir une adresse email valide.<br>";
    }

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
    
    // L'inscription a fonctionné si aucun message d'erreur est affiché
    if (empty($content)){ 
        $content .= "Vous êtes inscrit !";
        $mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT);

        //Mettre les données du formulaire dans la base de données.
        $queryInsert = "INSERT INTO user (name_user,firstName_user,email_user,password_user) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $inscription = $pdo->prepare($queryInsert);
        $inscription->execute(
            [
                $nom,
                $prenom,
                $email,
                $mdpCrypt
            ]
        );
    } 
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="asset/style/style.css">
</head>

<!-- logo-->
<div id="logo">

</div>

<!--bouton connexion-->
<div class="mb-3">
    <input class="form-submit-button" type="submit" value="Connexion" name="connexion">
</div>

<!--bouton inscription-->
<div class="mb-3">
    <input class="form-submit-button" type="submit" value="Inscription" name="inscription">
</div>


<section class="container">
    <h2 class="text-center mb-3">Rejoignez Iris aujourd'hui !</h2>

    <!-- email-->
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <!-- Nom-->
    <div class="mb-3">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom">
    </div>

    <!-- Prénom-->
    <div class="mb-3">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
        
    <!-- mot de passe-->
    <div class="mb-3">
        <label for="mdp">Mot de passe</label>
        <input type="password" class="form-control" id="mdp" name="mdp">
    </div>

    <!-- confirm mdp -->
    <div class="mb-3">
        <label for="confirmdp">Confirmation mot de passe</label>
        <input type="password" class="form-control" id="confirmdp" name="confirmdp">
    </div>

        
    <!--bouton s'inscrire-->
        <div class="mb-3">
            <input class="form-submit-button" type="submit" value="Je m'inscris" name="jeminscris">
        </div>

    </form>

</section>