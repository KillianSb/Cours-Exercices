<?php
    // démarrage de la session
    session_save_path('/tmp');
    session_start();
    // initialisation de l'état de connexion (variable login);
    if(!isset($_SESSION['login'])) {
        $_SESSION['login'] = "non";
    }




















    // TRAITEMENT DU FORMULAIRE D'IDENTIFICATION
    if(isset($_REQUEST['identifiant']) AND isset($_REQUEST['password'])) {
        if($_REQUEST['identifiant'] == "admin" AND $_REQUEST['password'] == "123456") {
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
        $dernier_lien = '<a href="index.php?page=login">Se connecter</a>';
    }

    echo "<p>SESSION['login'] -> ".$_SESSION['login']."</p>";


?>
<p>
    <a href="index.php">Accueil</a> | 
    <a href="index.php?page=equipe">Equipe</a> | 
    <a href="index.php?page=contact">Contact</a> |
    <?php echo $dernier_lien; ?>
</p>
<?php
    if(isset($_REQUEST['page'])) {
        include $_REQUEST['page'].'.php';
    } else {
        include 'accueil.php';
    } 
?>