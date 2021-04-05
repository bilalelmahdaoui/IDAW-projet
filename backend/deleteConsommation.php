<?php
require_once('config.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
}
if (isset($_POST['id_aliment'])) {
  $id_aliment = $_POST['id_aliment'];
}

$requete = "DELETE FROM Consommer WHERE id_aliment = ${id_aliment} AND login = ${login};";
echo $requete;

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Suppression avec succès.";
}

$mysqli->close();
