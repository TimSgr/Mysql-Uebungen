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
        $dt = $_POST["dt"];
        
        $sql = "INSERT INTO fp(hersteller, typ, "
        . "gb, preis, artnummer, prod) "
        . "VALUES('$her','$typ', $gb, $preis, '$art','$dt')";
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
<form action="u_db_erzeugen.php" method="POST">
    <br><input name="her"> Hersteller <br>
    <br><input name="typ"> Typ <br>
    <br><input name="gb">GB<br>
    <br><input name="preis">preis<br>
    <br><input name="art">Artikelnummer<br>
    <br><input name="dt">Produktionsdatum<br>
    <br><input type="submit" name="gesendet">
    <input type="reset">
</form>
<br> Alle <a href="u_db_tabelle.php"> anzeigen</a></p>
</body>
</html>