<?php
require_once('config.php');

if (isset($_POST['id_aliment'])) {
  $id_aliment = $_POST['id_aliment'];
}
if (isset($_POST['nom_aliment'])) {
  $nom_aliment = $_POST['nom_aliment'];
}
if (isset($_POST['calories'])) {
  $calories = $_POST['calories'];
}
if (isset($_POST['eau'])) {
  $eau = $_POST['eau'];
}
if (isset($_POST['proteines'])) {
  $proteines = $_POST['proteines'];
}
if (isset($_POST['glucides'])) {
  $glucides = $_POST['glucides'];
}

$requete = "UPDATE `Aliment` SET `nom_aliment`='${nom_aliment}',`calories`='${calories}',`eau`='${eau}',`proteines`='${proteines}',`glucides`='${glucides}' WHERE `id_aliment`='${id_aliment}';";

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Changement avec succès!";
}

$mysqli->close();
