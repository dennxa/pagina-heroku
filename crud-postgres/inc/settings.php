<?php 
//settings locales
//$servername = "localhost";
//$username = "postgres";
//$password = "12345";
//$dbname = "databas";
//$port = 5432;

//settings heroku
$servername = "ec2-18-208-24-104.compute-1.amazonaws.com";
$username = "qmbtsplubetxjg";
$password = "f0055bba77fd5f22d770de6119fb88ca75be2985454b001f0d12bc680ca1289d";
$dbname = "db2bsq925poq2q";
$port = 5432;

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="https://denilomas.herokuapp.com/crud-postgres/">Sitio de login</a>
  <?php
  exit();
}
}

?>