<?php
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
    $artnummer = $_POST["artnummer"];
    $prod = $_POST["prod"];
    $oripn = $_POST["oripn"];
    $sql = "UPDATE fp SET hersteller = '$her',".
    "typ = '$typ', gb= '$gb', ".
    "preis = '$preis', artnummer = '$artnummer',".
    "prod = '$prod'".
    "WHERE artnummer = '$oripn' ";
    mysqli_query($con,$sql);

    // echo $her;
    // echo "\n <br>";
    // echo "$typ";
    // echo "\n <br>";
    // echo $gb;
    // echo "\n <br>";
    // echo $preis;
    // echo "\n <br>";
    // var_dump($artnummer);
    // echo "\n <br>";
    // echo $prod;
    // echo "\n <br> <br> \-----/";
    // echo $oripn;
    // // var_dump($con);
    // echo "\n --- <br> <br>";
    // var_dump($sql);
    // echo "\n --- <br> <br>"; 
    // var_dump($oripn);
    $num = mysqli_affected_rows($con);
    if($num > 0) echo "Betroffen: $num<br>";
    else         echo "Betroffen: 0 <br>";

    mysqli_close($con);

    echo "<br> Zur <a href='u_db_einzel_a.php'> Auswahl </a> <br>";
?>