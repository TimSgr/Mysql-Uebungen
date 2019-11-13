<?php
echo "Treffen Sie Ihre Auswahl";
echo "<form action='u_db_einzel_b.php' method='POST'>";

 // for mysqli_connect
 $dbhost = 'db';
 $dbuser = 'root';
 $dbpass = 'example';
 $dbname = 'hardware';

 //Verbindung aufnehmen und Datenbank auswählen
 $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 $res = mysqli_query($con, "SELECT * FROM fp");

 // Tabellenbeginn
 echo "<table border='1'>";

 //Überschrift
 echo "<tr><td> Auswahl </td><td> Hersteller </td>";
 echo "<td>Typ</td> <td>GB</td>";
 echo "<td>Preis</td> <td>Artikelnummer</td> <td> Produktionsdatum </td></tr>";

 while ($dsatz = mysqli_fetch_assoc($res))
 {
    echo "<tr>";
    echo "<td><input type='radio' name='auswahl1'";
    echo "value='" .$dsatz["artnummer"] . "'></td>";
    echo "<td>" .$dsatz["hersteller"]. "</td>";
    echo "<td>" .$dsatz["typ"]. "</td>";
    echo "<td>" .$dsatz["gb"]. "</td>";
    echo "<td>" .$dsatz["preis"]. "</td>";
    echo "<td>" .$dsatz["artnummer"]. "</td>";
    echo "<td>" .$dsatz["prod"]. "</td>";
 }
 echo "</table>";

 mysqli_close($con);
 echo "<br> <br>";
 echo "<input type='submit' value='Datensatz anzeigen'>"
?>

