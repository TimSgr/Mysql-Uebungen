<?php
// for mysqli_connect
$dbhost = 'db';
$dbuser = 'root';
$dbpass = 'example';
$dbname = 'hardware';

//Verbindung aufnehmen und Datenbank auswählen
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$sql = "SELECT hersteller, preis FROM fp WHERE ";

switch($_POST["auswahl"])
{
    case 1: $sql .="preis <=120";
    break;

    case 2: $sql .="preis > 120 AND preis <= 140";
    break;

    case 3: $sql .="preis > 140";
    break;
}
$res = mysqli_query($con,$sql);
$num = mysqli_num_rows($res);

if($num > 0) echo "Ergebnis:<br>";
else         echo "Keine Ergebnisse <br>";

while($dsatz = mysqli_fetch_assoc($res))
    echo $dsatz["hersteller"]. ", " . $dsatz["preis"]. "<br>";

mysqli_close($con);
?>