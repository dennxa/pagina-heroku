<?php 
//settings locales
//$servername = "localhost";
//$username = "postgres";
//$password = "12345";
//$dbname = "databas";
//$port = 5432;

//settings heroku
$servername = "localhost";
$username = "postgres";
$password = "12345";
$dbname = "databas";
$port = 5432;

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="http://localhost/crud-postgres">Sitio de login</a>
  <?php
  exit();
}
}

?>