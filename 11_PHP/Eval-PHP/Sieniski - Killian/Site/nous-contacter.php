<?php
    include 'header.php'; //Inclusion de la page header
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
        <h1>Nous Contacter</h1>
        <em>
        <hr/>

            <form method="post" action="merci.php?nom=nom&prenom=prenom&societe=societe&fonction=fonction&message=message" > <!-- Redirection vers merci.php avec les informations du formulaires -->
            <input type="text" name="nom" id="nom" placeholder="Nom"></br></br>
            <input type="text" name="prenom" id="prenom" placeholder="Prenom"></br></br>
            <input type="text" name="societe" id="societe" placeholder="Societe"></br></br>
            <input type="text" name="fonction" id="fonction" placeholder="Fonction"></br></br>
            <input type="text" name="message" id="message" placeholder="Message"></br></br>
            <input type="submit" value="Envoyer"> 
            </form>
        <em>
        <hr/>
        
    </body>
</html>

<?php
    include 'footer.php'; //Inclusion de la page footer
?>