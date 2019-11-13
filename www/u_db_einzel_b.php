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
    $sql = "SELECT * FROM fp WHERE artnummer = '"
    .  $_POST["auswahl1"] ."' ";
    $res = mysqli_query($con, $sql);
    $dsatz = mysqli_fetch_assoc($res);

    // var_dump($con);
    // echo "\n ----";
    // var_dump($sql);
    // echo "\n ----";
    // var_dump($res);
    // var_dump($dsatz);
    echo "\n <br>";

    echo "Bitte neue Inhalte eintragen und speichern: <br>";
    echo "<form action = 'u_db_einzel_c.php' method='post'>";
    echo "<br><input name='her' value='" .$dsatz["hersteller"].
        "'> Hersteller <br> ";
    echo "<br><input name='typ' value='" .$dsatz["typ"].
        "'> Typ <br> ";
    echo "<br><input name='gb' value='" .$dsatz["gb"].
        "'> GB <br> ";
    echo "<br><input name='preis' value='" .$dsatz["preis"].
        "'> Preis <br> ";
    echo "<br><input name='artnummer' value='" .$dsatz["artnummer"].
        "'> artnummer <br> ";
    echo "<br><input name='prod' value='" .$dsatz["prod"].
        "'> Produktionsdatum <br> ";
    echo "<br><input type='hidden' name ='oripn' value='" 
        . $_POST["auswahl1"] . "'> ";
    echo "<input type='submit' value='speichern'>";
    echo "<input type='reset'><br>";
    echo "</form>";

    mysqli_close($con);
}
else echo "<br>Keine Auswahl getroffen";



?>