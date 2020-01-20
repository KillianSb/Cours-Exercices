<?php
    include 'header.php'; //Inclusion de la page header
?>
<h1>Page présentation</h1>


<p>Vous êtes sur la page présentation</p>
<?php
    $dateDonner = 1892; //Date de reférence
    $dateDuJour = date("Y"); //Date du jour

    echo "L'entreprise a été créez en ". $dateDonner;
    echo "<br/><br/>"."Soit il ya maintenant ".($dateDuJour - $dateDonner) . " années";
?>
<?php
    include 'footer.php'; //Inclusion de la page footer
    ?>
?>