<?php
    // for mysqli_connect
    $dbhost = 'db';
    $dbuser = 'root';
    $dbpass = 'example';
    $dbname = 'firma';

    //Verbindung aufnehmen und Datenbank auswählen
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

?>