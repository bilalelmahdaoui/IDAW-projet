<?php
require_once('config.php');

if (isset($_POST['id_aliment_parent'])) {
  $id_aliment_parent = $_POST['id_aliment_parent'];
}

$requete = "SELECT nom_aliment, ratio FROM Aliment, Composer WHERE id_aliment = id_aliment_filleule AND id_aliment_parent = ${id_aliment_parent};";

$result = $mysqli->query($requete);
$results = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $results[] = $row;
  }
  echo json_encode($results);
} else {
  echo "Pas d'aliments!";
}
$mysqli->close();
