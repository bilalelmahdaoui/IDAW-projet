<?php
require_once('config.php');

if (isset($_POST['id_aliment'])) {
  $id_aliment = $_POST['id_aliment'];
}

$requete = "DELETE FROM Aliment WHERE id_aliment = ${id_aliment};";
echo $requete;

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Suppression avec succès.";
}

$mysqli->close();
