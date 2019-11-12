<!DOCTYPE html>
<html>
<head>
    <title> Hi</title>
<meta charset="utf-8">
</head>
<body>
<?php
    
    // for mysqli_connect
    $dbhost = 'db';
    $dbuser = 'root';
    $dbpass = 'example';
    $dbname = 'firma';
    
    //Verbindung aufnehmen und Datenbank auswählen
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
   
    //SQL-Abfrage ausführen
    $sql = "SELECT nachname, gehalt FROM personen"
        . " WHERE gehalt >= 3000 AND gehalt <= 3700"
        . " ORDER BY gehalt DESC";
    $res = mysqli_query($con,$sql);
    $num = mysqli_num_rows($res);
    if ($num > 0) echo "Ergebnis: <br>";
    else          echo "Keine Ergebnisse<br>";

    while ($dsatz = mysqli_fetch_assoc($res))
        echo $dsatz["nachname"]. ", " .$dsatz["gehalt"]. "<br>";  

    mysqli_close($con);
?>
</body>
</html>