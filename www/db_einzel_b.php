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
    $sql = "SELECT * FROM personen WHERE personalnummer = "
    . $_POST["auswahl"];
    $res = mysqli_query($con, $sql);
    $dsatz = mysqli_fetch_assoc($res);

    var_dump($dsatz);
    echo "\n <br>";

    echo "Bitte neue Inhalte eintragen und speichern: <br>";
    echo "<form action = 'db_einzel_c.php' method='post'>";
    echo "<br><input name='na' value='" .$dsatz["nachname"].
        "'> Nachname <br> ";
    echo "<br><input name='vn' value='" .$dsatz["vorname"].
        "'> Vorname <br> ";
    echo "<br><input name='pn' value='" .$dsatz["personalnummer"].
        "'> Personalnummer <br> ";
    echo "<br><input name='ge' value='" .$dsatz["gehalt"].
        "'> Gehalt <br> ";
    echo "<br><input name='gt' value='" .$dsatz["geburtstag"].
        "'> Geburtstag <br> ";
    echo "<br><input type='hidden' name ='oripn' value='" 
        . $_POST["auswahl"] . "'> ";
    echo "<input type='submit' value='speichern'>";
    echo "<input type='reset'><br>";
    echo "</form>";

    mysqli_close($con);
}
else echo "<br>Keine Auswahl getroffen";



?>