<?php
require_once('config.php');

$requete = "DELETE FROM Utilistateur WHERE login = ${login};";
echo $requete;

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Suppression avec succès.";
}

$mysqli->close();
