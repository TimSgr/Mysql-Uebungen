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
    $sql = "SELECT hersteller, typ, prod, artnummer FROM fp"
    . " WHERE prod LIKE '2008-03%' OR prod LIKE '2008-06%' " 
    . " ORDER BY prod";
    $res = mysqli_query($con,$sql);
    $num = mysqli_num_rows($res);
    if ($num > 0) echo "Ergebnis: <br>";
    else          echo "Keine Ergebnisse<br>";

    while ($dsatz = mysqli_fetch_assoc($res))
        echo $dsatz["hersteller"]. ", " .$dsatz["typ"]. ", ".$dsatz["prod"]. ", ".$dsatz["artnummer"].", ". "<br>";  

    mysqli_close($con);
?>
</body>
</html>