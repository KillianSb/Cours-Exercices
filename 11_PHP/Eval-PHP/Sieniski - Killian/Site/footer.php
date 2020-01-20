<br/>
<br/>
<?php
    $date1 = date('Y-m-d'); // Date du jour
    $h = date('H'); // Initialisation de H pour $h
    $i = date('i'); // Initialisation de i pour $i
    setlocale(LC_TIME, "fr_FR"); // Heure et date locale France
    echo strftime("Il est ".date($h+1).'h'.date($i). ", et nous sommes le " ."%A %d %B %G", strtotime($date1));
?>