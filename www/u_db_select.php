<?php
// for mysqli_connect
$dbhost = 'db';
$dbuser = 'root';
$dbpass = 'example';
$dbname = 'hardware';

//Verbindung aufnehmen und Datenbank auswählen
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$sql = "SELECT * FROM fp WHERE hersteller==".$_POST["Auswahl"];

// if($_POST["Auswahl"]=="Quantum"){
//     $sql.= "Quantum";
// }
// elseif($_POST["Auswahl"]=="IBM Corperation"){
//     $sql.= "IBM Corperation";
// }
// elseif($_POST["Auswahl"]=="Fujitsu"){
//     $sql.= "Fujitsu";
// }
// elseif($_POST["Auswahl"]=="Seagate"){
//     $sql.= "Seagate";
// }

$res=mysqli_query($con,$sql);
echo "<table border='1'>";

echo "<tr> <td> Hersteller</td> <td>Typ</td>";
echo "<td> GB </td> <td> Preis </td>";
echo "<td> Artnr. </td> <td> Datum </td> </tr>";

while($dsatz=mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo "<td>" .$dsatz["hersteller"]. "</td>";
    echo "<td>" .$dsatz["typ"]. "</td>";
    echo "<td>" .$dsatz["gb"]. "</td>";
    echo "<td>" .$dsatz["preis"]. "</td>";
    echo "<td>" .$dsatz["artnummer"]. "</td>";
    echo "<td>" .$dsatz["prod"]. "</td>";
    echo "</tr>";
}

?>