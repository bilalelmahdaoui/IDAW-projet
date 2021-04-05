<?php
require_once('config.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
}
if (isset($_POST['nom'])) {
  $nom = $_POST['nom'];
}
if (isset($_POST['prenom'])) {
  $prenom = $_POST['prenom'];
}
if (isset($_POST['sexe'])) {
  $sexe = $_POST['sexe'];
}
if (isset($_POST['date_naissance'])) {
  $date_naissance = $_POST['date_naissance'];
}

$requete = "INSERT INTO Utilisateur (login, nom, prenom, sexe, date_naissance) VALUES ('${login}', '${nom}', '${prenom}', '${sexe}', '${date_naissance}');";
echo $requete;

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Ajout avec succès.";
}

$mysqli->close();
