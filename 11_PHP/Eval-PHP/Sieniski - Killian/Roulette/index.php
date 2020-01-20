<!DOCTYPE html>
<h1> Acceuil </h1

<?php
    // démarrage de la session
    session_start();
    // initialisation de l'état de connexion (variable login);
    if(!isset($_SESSION['login'])) {
        $_SESSION['login'] = "non";
    }

    // TRAITEMENT DU FORMULAIRE D'IDENTIFICATION
    if(isset($_REQUEST['identifiant']) AND isset($_REQUEST['password'])) {
        if($_REQUEST['identifiant'] == "root" AND $_REQUEST['password'] == "toor") {
            $_SESSION['login'] = "oui";
            echo '<p style="color:green">Vous êtes maintenant connecté !</p>';
        } else {
            echo '<p style="color:red">Erreur de connexion</p>';
        }
    }

    // CHOIX DU MENU (se connecter ou se déconnecter)
    if($_SESSION['login'] == "oui") {
        $dernier_lien = '<a href="logout.php">Déconnexion</a>';
    } else {
        $dernier_lien = '<a href="login.php?page=login">Se connecter</a>';
    }
?>
<h2>Se connecter pour jouer !</h2>
<p>
    <?php echo $dernier_lien; ?>
</p>