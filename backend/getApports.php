<?php
require_once('config.php');

$requete = "SELECT * FROM Apport;";
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
