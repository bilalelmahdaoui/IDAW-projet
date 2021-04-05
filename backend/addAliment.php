<?php
require_once('config.php');

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

$requete = "INSERT INTO Aliment (nom_aliment, calories, eau, proteines, glucides) VALUES ('${nom_aliment}', '${calories}', '${eau}', '${proteines}', '${glucides}');";

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Changement avec succès!";
}

$mysqli->close();
