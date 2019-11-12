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
    $res = mysqli_query($con,"SELECT * FROM personen");

    //Anzahl Datensätze ermitteln und ausgeben
    $num = mysqli_num_rows($res);
    if($num > 0) echo "Ergebnis: <br>";
    else echo "Keine Ergebnisse <br>";

    //Datensätze aus Ergebnis ermitteln
    //in Array speichern und ausgeben
    while ($dsatz=mysqli_fetch_assoc($res))
    {
        echo $dsatz["nachname"]. ", "
            .$dsatz["vorname"]. ", "
            .$dsatz["personalnummer"]. ", "
            .$dsatz["gehalt"]. ", "
            .$dsatz["geburtstag"]. "<br>";
    }

    //Verbindung schließen
    mysqli_close($con);
?>
</body>
</html>