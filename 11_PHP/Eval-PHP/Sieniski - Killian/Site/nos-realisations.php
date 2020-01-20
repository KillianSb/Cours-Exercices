<?php
    include 'header.php'; //Inclusion de la page header
?>

<?php
    $compteur = 0; //Compter de 0
    $tableau = ['PHP','MySQL','HTML','CSS','PYTHON','Webdesign','Photoshop','Illustrator','InDesign','UI/UX','Algo','XML']; //Tableaux
    for ($compteur = 0; $compteur < 12; $compteur ++) { //Compteur de 0 a 12
        if ($compteur % 2 == 0) { //Compteur 1 sur 2
            echo "<br/>"."<span style='color:#FF0000'> $tableau[$compteur] </span>";
        }
        else {
            echo "<br/>"."<span style='color:#007FFF'> $tableau[$compteur] </span>";
        }
    }
?>

<?php
    include 'footer.php'; //Inclusion de la page footer
?>