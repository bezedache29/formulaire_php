<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Formulaire</title>
</head>

<?php
    if(isset($_COOKIE['prenom']) && isset($_COOKIE['nom']) && isset($_COOKIE['pseudo'])) {
        print_r($_COOKIE);
?>
    <p>Salut <?= $_COOKIE['prenom']; ?> <?= $_COOKIE['nom']; ?>, re-bienvenue ! :-)</p>
    <p>Si ce n'est pas toi, <a href="reset.php">clique sur ce lien</a></p>
<?php
    }else {
?>
<body>
    <header>
        <h1>Formulaire d'inscription</h1>
    </header>
    <section class="conteneur">
        <p>Bienvenue et merci de vous inscrire en utilisant le formulaire</p>
        <form method="post" action="inscription.php">
            <input type="text" name="prenom" placeholder="Votre Prénom" required>
            <input type="text" name="nom" placeholder="Votre Nom" required>
            <input type="date" name="ddn">
            <input type="text" name="pseudo" placeholder="Votre pseudo" required>
            <input type="password" name="pwd" placeholder="Votre mot de passe" required>
            <button>Valider</button>
        </form>
    </section>
<?php
    }
?>
    <footer>
        <div class="copyright">
            <p>Copyright © 2020 | <a href="http://ripley.eu" target=_blank>Ripley</a></p>
        </div>
    </footer>
</body>
</html>
