<?php
    include 'header.php'; //Inclusion de la page header
?>

<h1> Voici vos Information entrer : </h1>

<?php //recuperation des données

    if(isset($_REQUEST['nom'])) 
    {
        $nom = $_REQUEST['nom'];
    } 
    if(isset($_REQUEST['prenom'])) 
    {
        $prenom = $_REQUEST['prenom'];
    }
    if(isset($_REQUEST['fonction'])) 
    {
        $fonction = $_REQUEST['fonction'];
    }
    if(isset($_REQUEST['societe'])) 
    {
        $societe = $_REQUEST['societe'];
    } 
    if(isset($_REQUEST['message'])) 
    {
        $message = $_REQUEST['message'];
    } 

?>

<?php //Affichage du de la phrases avec éléments
echo $nom." ".$prenom." (".$fonction.") ,de la societé ".$societe." vous a écrit :"."</br></br>".$message;

?>
<!-- Boutton retour Acceuil -->
</br></br>  <form method="post" action="index.php" >
            <input type="submit" value="Retour Accueil"> 
            </form>

<?php
    include 'footer.php'; //Inclusion de la page footer
?>