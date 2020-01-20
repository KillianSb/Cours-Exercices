<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
        <h1>Exercice PHP</h1>
        <em>
        <hr/>
        <?php
            $nombre = 58455;

            $heure = (intdiv($nombre,3600));
            $minutereste = $nombre%3600;
            $minute = (intdiv($minutereste,60));
            $seconde = $minutereste%60;




            echo $nombre .'secondes font : '.$heure.'heure(s),'.$minute.' minute(s), et '.$seconde.'seconde(s)'.'<br/>';
        ?>
    </body>
</html>