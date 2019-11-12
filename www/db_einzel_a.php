<?php
echo "Treffen Sie Ihre Auswahl";
echo "<form action='db_einzel_b.php' method='POST'>";

 // for mysqli_connect
 $dbhost = 'db';
 $dbuser = 'root';
 $dbpass = 'example';
 $dbname = 'firma';

 //Verbindung aufnehmen und Datenbank auswählen
 $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 $res = mysqli_query($con, "SELECT * FROM personen");

 // Tabellenbeginn
 echo "<table border='1'>";

 //Überschrift
 echo "<tr><td> Auswahl </td><td> Nachname </td>";
 echo "<td>Vorname</td> <td>P-Nr</td>";
 echo "<td>Gehalt</td> <td>Geburtstag</td> </tr>";

 while ($dsatz = mysqli_fetch_assoc($res))
 {
    echo "<tr>";
    echo "<td><input type='radio' name='auswahl'";
    echo "value='" .$dsatz["personalnummer"] . "'></td>";
    echo "<td>" .$dsatz["nachname"]. "</td>";
    echo "<td>" .$dsatz["vorname"]. "</td>";
    echo "<td>" .$dsatz["personalnummer"]. "</td>";
    echo "<td>" .$dsatz["gehalt"]. "</td>";
    echo "<td>" .$dsatz["geburtstag"]. "</td>";
 }
 echo "</table>";

 mysqli_close($con);
 echo "<br> <br>";
 echo "<input type='submit' value='Datensatz anzeigen'>"
?>