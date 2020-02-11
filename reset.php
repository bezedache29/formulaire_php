<?php
    setcookie('prenom', NULL, -1);
    setcookie('nom', NULL, -1);
    setcookie('pseudo', NULL, -1);
?>

<?php
    header('Location: index.php');
?>