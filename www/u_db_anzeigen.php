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
    $dbname = 'hardware';
    
    //Verbindung aufnehmen und Datenbank auswählen
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    //SQL-Abfrage ausführen
    $res = mysqli_query($con,"SELECT * FROM fp");

    //Anzahl Datensätze ermitteln und ausgeben
    $num = mysqli_num_rows($res);
    if($num > 0) echo "Ergebnis: <br>";
    else echo "Keine Ergebnisse <br>";

    //Datensätze aus Ergebnis ermitteln
    //in Array speichern und ausgeben
    while ($dsatz=mysqli_fetch_assoc($res))
    {
        echo $dsatz["hersteller"]. ", "
            .$dsatz["typ"]. ", "
            .$dsatz["gb"]. ", "
            .$dsatz["artnummer"]. ", "
            .$dsatz["prod"]. "<br>";
    }

    //Verbindung schließen
    mysqli_close($con);
?>
</body>
</html>