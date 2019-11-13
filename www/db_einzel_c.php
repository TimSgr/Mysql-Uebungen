<?php
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
    $oripn = $_POST["oripn"];
    $sql = "UPDATE personen SET nachname= '$na' , ".
    "vorname= '$vn', personalnummer= '$pn', ".
    "gehalt= '$ge', geburtstag = '$gt'".
    "WHERE personalnummer = '$oripn'";
    mysqli_query($con,$sql);

    $num = mysqli_affected_rows($con);
    if($num > 0) echo "Betroffen: $num<br>";
    else         echo "Betroffen: 0 <br>";

    mysqli_close($con);

    echo "<br> Zur <a href='db_einzel_a.php'> Auswahl </a> <br>";
?>