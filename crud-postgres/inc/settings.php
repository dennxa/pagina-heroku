<?php 
//settings locales
//$servername = "localhost";
//$username = "postgres";
//$password = "12345";
//$dbname = "databas";
//$port = 5432;

//settings heroku
$servername = "ec2-54-92-230-7.compute-1.amazonaws.com";
$username = "das6ugnh0snnq8";
$password = "2c8b096f70c202ce3d95bd24835a07c4cdbad68eed9be347fa495ab1f7078b13";
$dbname = "das6ugnh0snnq8";
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