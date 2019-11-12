<?php


    // for mysqli_connect
    $dbhost = 'db';
    $dbuser = 'root';
    $dbpass = 'example';
    $dbname = 'firma';

    //Verbindung aufnehmen und Datenbank auswählen
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    
    $sql="SELECT nachname, vorname FROM personen"
    . " WHERE nachname LIKE '" .$_POST["anfang"]. "%'";
    $res = mysqli_query($con,$sql);
    $num = mysqli_num_rows($res);
    if($num > 0) echo "Ergebnis: <br>";
    else         echo "Keine Ergebnisse<br>";

    while ($dsatz = mysqli_fetch_assoc($res))
        echo $dsatz["nachname"] .", ". $dsatz["vorname"]. "<br>";

        mysqli_close($con);
?>
</body>
</html>