<?php
require_once('config.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
}

$login = 'bilalelmahdaoui';

$requete = "SELECT Aliment.id_aliment, nom_aliment, date FROM Consommer, Aliment WHERE Consommer.id_aliment = Aliment.id_aliment AND login = '${login}';";
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
