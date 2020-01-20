<?php
session_save_path('/tmp');
session_start();
session_destroy();
?>



<h1>Vous etes maintenant déconnecté du site !</h1>
<p><a href="index.php">Retour au site</a></p>