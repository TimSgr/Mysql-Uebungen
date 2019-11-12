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
        $dbname = 'hardware';

        //Verbindung aufnehmen und Datenbank auswählen
        $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        $her = $_POST["her"];
        $typ = $_POST["typ"];
        $gb = intval($_POST["gb"]);
        $preis = doubleval($_POST["preis"]);
        $art = $_POST["art"];
        $datum = $_POST["datum"];
        $sql = "INSERT INTO fp(hersteller, typ, "
        . "gb, preis, artnummer, prod) "
        . "VALUES('$her','$typ', $gb, $preis, '$art')";
        mysqli_query($con, $sql);
    
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
<form action="u_db_erzeugen1.php" method="POST">
    <br><input name="her"> Nachname <br>
    <br><input name="typ"> Vorname <br>
    <br><input name="gb">Personalnummer (eine ganze Zahl)<br>
    <br><input name="preis">Gehalt (Nachkommastellen mit Punkt)<br>
    <br><input name="art">Geburtsdatum (in JJJJ-MM-TT)<br>
    <br><input name="datum">Datum<br>
    <br><input type="submit" name="gesendet">
    <input type="reset">
</form>
<br> Alle <a href="db_tabelle.php"> anzeigen</a></p>
</body>
</html>