<?php
if (isset($_POST["auswahl"]))
{
    // for mysqli_connect
        $dbhost = 'db';
        $dbuser = 'root';
        $dbpass = 'example';
        $dbname = 'firma';

    //Verbindung aufnehmen und Datenbank auswählen
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sql = "DELETE FROM personen WHERE personalnummer = "
    . $_POST["auswahl"];
    mysqli_query($con,$sql);

    $num = mysqli_affected_rows($con);
    
    echo "".$_POST["auswahl"];


    if($num > 0) echo "Betroffen: $num <br>";
    else         echo "Betroffen: 0";

    mysqli_close($con);
}
else   echo "Keine Auswahl getroffen <br>";

echo "<br> Zur <a href='db_loeschen_a.php'>Auswahl</a></p>";
?>