<?php
require_once('config.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
}

$requete = "SELECT MAX(id_aliment) as max_aliment_id FROM `Aliment`;";

$result = $mysqli->query($requete);
$maxId = $result->fetch_assoc();

if ($maxId != null) {
  echo json_encode($maxId);
} else {
  echo `{"max_aliment_id":"0"}`;
}

$mysqli->close();
