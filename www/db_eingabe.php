<?php
     // for mysqli_connect
     $dbhost = 'db';
     $dbuser = 'root';
     $dbpass = 'example';
     $dbname = 'firma';
 
     //Verbindung aufnehmen und Datenbank auswählen
     $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

     $sql = "SELECT nachname, gehalt FROM personen"
     ." WHERE gehalt >=" . doubleval($_POST["ug"])
     ."  AND  gehalt <=" .doubleval($_POST["og"])
     ." ORDER BY gehalt";
    
    $res = mysqli_query($con,$sql);
    $num = mysqli_num_rows($res);
    if ($num > 0) echo "Ergebnis:<br>";
    else          echo "Keine Ergebnisse<br>";

    while($dsatz=mysqli_fetch_assoc($res))
        echo $dsatz["nachname"]. ", ". $dsatz["gehalt"]. "<br>";

    mysqli_close($con);
?>