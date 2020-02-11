<?php
    if(isset($_POST['pseudo']) && isset($_POST['prenom']) && isset($_POST['nom'])) {
        setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
        setcookie('prenom', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
        setcookie('nom', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

        $_COOKIE['pseudo'] = $_POST['pseudo'];
        $_COOKIE['prenom'] = $_POST['prenom'];
        $_COOKIE['nom'] = $_POST['nom'];
    }

    print_r($_COOKIE);
?>

<a href="bienvenue.php"><p>Direction la page de bienvenue</p></a>