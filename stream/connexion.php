
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="asset/style/style.css">
</head>


<section class="container">
    <h2 class="text-center mb-3">Connexion</h2>

    <form action="config/login_traitement.php" method="post">
        <div class="form-error">
                    <p><?= $content; ?></p>
        </div>

        <!-- email-->
        <div class="mb-3">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <!-- mot de passe-->
        <div class="mb-3">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>

        <!--bouton se connecter-->
        <div class="mb-3">
            <input class="form-submit-button" type="submit" value="Se connecter" name="seconnecter">
        </div>

    </form>

</section>
