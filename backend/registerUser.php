<?php
require_once('config.php');

if (isset($_GET['login'])) {
  $login = $_GET['login'];
}
if (isset($_GET['nom'])) {
  $nom = $_GET['nom'];
}
if (isset($_GET['prenom'])) {
  $prenom = $_GET['prenom'];
}
if (isset($_GET['sexe'])) {
  $sexe = $_GET['sexe'];
}
if (isset($_GET['date_naissance'])) {
  $date_naissance = $_GET['date_naissance'];
}

$requete = "INSERT INTO Utilisateur (login, nom, prenom, sexe, date_naissance) VALUES ('${login}', '${nom}', '${prenom}', '${sexe}', '${date_naissance}');";
echo $requete;

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Ajout avec succès.";
}

$mysqli->close();
