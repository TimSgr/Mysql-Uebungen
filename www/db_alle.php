<?php
  // for mysqli_connect
  $dbhost = 'db';
  $dbuser = 'root';
  $dbpass = 'example';
  $dbname = 'firma';

  //Verbindung aufnehmen und Datenbank auswählen
  $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  $sql = "UPDATE personen SET gehalt = (round(gehalt * 1.05, 2))";
  mysqli_query($con,$sql);

  $num = mysqli_affected_rows($con);
  if($num > 0) echo "Betroffen: $num<br>";
  else echo " Betroffen: 0<br>";

  mysqli_close($con);
  
  echo "Alle <a href='db_tabelle.php'>anzeigen</a><br>";