<?php
require_once('config.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
}
if (isset($_POST['password'])) {
  $password = $_POST['password'];
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

$requete = "INSERT INTO Utilisateur (login, password, nom, prenom, sexe, date_naissance) VALUES ('${login}', '${password}', '${nom}', '${prenom}', '${sexe}', '${date_naissance}');";

if (!$mysqli->query($requete)) {
  echo json_encode($mysqli->error);
}

$mysqli->close();
