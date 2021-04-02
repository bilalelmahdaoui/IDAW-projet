<?php
$servername = 'localhost';
$username = 'bilalelmahdaoui';
$password = 'helloworld';
$dbname = 'idaw_projet';

$mysqli = mysqli_connect($servername, $username, $password, $dbname);

if ($mysqli->connect_errno) {
  echo "Erreur: Echec de connexion avec MySQL: " . $mysqli->connect_error;
  exit();
}
