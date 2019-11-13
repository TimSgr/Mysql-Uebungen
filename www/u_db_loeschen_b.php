<?php
if (isset($_POST["auswahl1"]))
{
    // for mysqli_connect
        $dbhost = 'db';
        $dbuser = 'root';
        $dbpass = 'example';
        $dbname = 'hardware';

    //Verbindung aufnehmen und Datenbank auswählen
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sql = "DELETE FROM fp WHERE artnummer = '"
    . $_POST["auswahl1"]."'";
    mysqli_query($con,$sql);
    var_dump($sql);
    echo "------\n <br>";
    echo "".$_POST["auswahl1"];
    echo "\n <br>";
    $num = mysqli_affected_rows($con);


    if($num > 0) echo "Betroffen: $num <br>";
    else         echo "Betroffen: 0";

    mysqli_close($con);
}
else   echo "Keine Auswahl getroffen <br>";

echo "<br> Zur <a href='u_db_loeschen_a.php'>Auswahl</a></p>";
?>