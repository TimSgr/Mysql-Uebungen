<!DOCTYPE html>
<html>
<head>
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
    $res = mysqli_query($con,"SELECT * FROM personen");
    //Tabellenbeginn
    echo "<table border='1'>";

    //Überschrift
    echo "<tr> <td> Lfd. Nr. </td> <td> Name </td>";
    echo "<td> Vorname </td> <td> Personalnummer </td>";
    echo "<td> Gehalt </td> <td>Geburtstag</td></tr>";

    $lf = 1;
    while ($dsatz = mysqli_fetch_assoc($res))
    {
        echo "<tr>";
        echo "<td>$lf</td>";
        echo "<td>" . $dsatz["nachname"]. "</td>";
        echo "<td>" . $dsatz["vorname"]. "</td>";
        echo "<td>" . $dsatz["personalnummer"]. "</td>";
        echo "<td>" . $dsatz["gehalt"]. "</td>";
        echo "<td>" . $dsatz["geburtstag"]. "</td>";
        echo "</tr>";
        $lf=$lf+1;
    }

    //Tabellenende
    echo "</table>";

    mysqli_close($con);
?>
</body>
</html>
