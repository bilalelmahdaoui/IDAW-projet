<?php
require_once('config.php');

$_POST['id_aliment'] = 3;

if (isset($_POST['id_aliment'])) {
  $id_aliment = $_POST['id_aliment'];
}


$requete = "SELECT nom_apport, valeur_moyenne FROM Apport, Offrir WHERE Apport.id_apport = Offrir.id_apport AND id_aliment = ${id_aliment};";

$result = $mysqli->query($requete);
$results = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $results[] = $row;
  }
  echo json_encode($results);
} else {
  echo "Pas d'apports!";
}
$mysqli->close();
