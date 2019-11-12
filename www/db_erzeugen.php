<!DOCTYPE html>
<html>
<head>
        <title> </title>
<meta charset="utf-8">
<?php
    if(isset($_POST["gesendet"]))
    {
        // for mysqli_connect
        $dbhost = 'db';
        $dbuser = 'root';
        $dbpass = 'example';
        $dbname = 'firma';

        //Verbindung aufnehmen und Datenbank auswählen
        $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        $na = $_POST["na"];
        $vn = $_POST["vn"];
        $pn = intval($_POST["pn"]);
        $ge = doubleval($_POST["ge"]);
        $gt = $_POST["gt"];
        $sql = "INSERT INTO personen(nachname, vorname, "
        . "personalnummer, gehalt, geburtstag) "
        . "VALUES('$na','$vn', $pn, $ge, '$gt')";
        mysqli_query($con, $sql);
        
        var_dump($sql);
        echo "\n";
        
        $num = mysqli_affected_rows($con);
        if ($num>0)
        {
            echo "<font color='#00aa00'>";
            echo "Ein Datensatz hinzugekommen";
            echo "</font><br>";
        }
        else 
        {
            echo "<font color='#ff0000'>";
            echo "Es ist ein Fehler augetreten, ";
            echo "Es ist kein Datensatz hinzugekommen";
            echo "</font><br>";
        }
        mysqli_close($con);
    }
?>
</head>
<body>
Bitte geben Sie einen Datensatz ein <br> und senden sie das Formular ab: <br>
<form action="db_erzeugen.php" method="POST">
    <br><input name="na"> Nachname <br>
    <br><input name="vn"> Vorname <br>
    <br><input name="pn">Personalnummer (eine ganze Zahl)<br>
    <br><input name="ge">Gehalt (Nachkommastellen mit Punkt)<br>
    <br><input name="gt">Geburtsdatum (in JJJJ-MM-TT)<br>
    <br><input type="submit" name="gesendet">
    <input type="reset">
</form>
<br> Alle <a href="db_tabelle.php"> anzeigen</a></p>
</body>
</html>