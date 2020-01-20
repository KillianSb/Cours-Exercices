<!DOCTYPE html>
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
<p>
    <?php echo $dernier_lien; ?>
</p>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
    _____________________
    <h1> Roulette </h1> 
    _____________________</br>

    <?php
        if ($_SESSION['mesResultat'] = null) //si $_SESSION['mesResultat'] = null alors il le remplie
            $_SESSION['mesResultat'] = array(); // on enregistre le tableau dans la session
            $tableauresultat2 = $_SESSION['mesResultat'];
            foreach($tableauresultat2 as $element);
            $montableaurouge = [1,3,5,7,9,12,14,16,18,19,21,23,25,27,30,32,34,36];

        if (isset($_SESSION['mesResultat'][0]) == 0) {
            $nombrechanger = rand(0 , 36);
            $tableauresultat2[0] = $nombrechanger;

            if ($tableauresultat2[1] == 0) {
                $nombrechanger = rand(0 , 36);
                $tableauresultat2[1] = $nombrechanger;
            
                if (in_array($nombrechanger, $montableaurouge)) 
                {
                    echo '<br/> le nombre tiré au sort est '. "<span style='color:#FF0000'> $nombrechanger </span <br/>";
                }
                else 
                {
                    echo '<br/> le nombre tiré au sort est '. $nombrechanger;
                }
                
                
                if ($nombrechanger == 0) {
                    //echo '<br/>'."le "."<font color=\"#40FF33\">0</font>"." l'emporte !";
                    echo '<br/>'."le "."<span style='color:#40FF33'>0</span>"." l'emporte !";
                }
                elseif ($nombrechanger%2) {
                    if (in_array($nombrechanger, $montableaurouge))
                    {
                        echo '<br/> le nombre est impaire et'."<span style='color:#FF0000'> rouge</span>";
                    }
                    else {
                        echo '<br/> le nombre est impaire et noir';
                    }
                    
                }
                else {
                    if (in_array($nombrechanger, $montableaurouge))
                    {
                        echo '<br/> le nombre est paire et'."<span style='color:#FF0000'> rouge</span>";
                    }
                    else {
                        echo '<br/> le nombre est pair et noir';
                    }
                    
                }

                if ($nombrechanger >19) {
                    echo " et manque";
                }
                elseif ($nombrechanger >0) {
                    echo " et passe";
                }
                else {}
            }
        
        }

    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.

        //de 0 a 36 : traiter le cas particuler du zero. 
        //ecrire en vert et ne pas afficherpair/impair et passe/manque.
            
        ?>
    <br/><br/> <button id="refresh" onclick="document.location.reload(false)"> Rafraichir </button> <br/><br/>

    </body>
</html>