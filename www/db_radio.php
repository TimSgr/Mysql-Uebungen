<?php

    // for mysqli_connect
    $dbhost = 'db';
    $dbuser = 'root';
    $dbpass = 'example';
    $dbname = 'firma';

    //Verbindung aufnehmen und Datenbank auswählen
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sql = "SELECT nachname, gehalt FROM personen WHERE ";

    switch($_POST["geh"])
    {
        case 1:
            $sql .= "gehalt <=3000";
            break;
        
        case 2:
            $sql .= "gehalt > 3000 AND gehalt <= 3500";
            break;

        case 3:
            $sql .= "gehalt > 3500 AND gehalt <= 4000";
            break;

        case 4:
            $sql .= "gehalt > 4000";
            break;

    }

    $res = mysqli_query($con,$sql);
    $num = mysqli_num_rows($res);
    if($num > 0) echo "Ergebnis: <br>";
    else         echo "Keine Ergebnisse <br>";

    while ($dsatz = mysqli_fetch_assoc($res))
        echo $dsatz["nachname"]. ", ". $dsatz["gehalt"]. "<br>";

    mysqli_close($con);
?>
</body>
</html>