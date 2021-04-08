<?php
require_once('config.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
}

if (isset($_SESSION['login'])) {
  $login = $_SESSION['login'];
}

if (isset($_POST['id_aliment'])) {
  $id_aliment = $_POST['id_aliment'];
}
if (isset($_POST['date'])) {
  $date = $_POST['date'];
}

$requete = "INSERT INTO Consommer (login, id_aliment, date) VALUES ('${login}', '${id_aliment}', '${date}');";
echo $requete;

if (!$mysqli->query($requete)) {
  echo ("Erreur: " . $mysqli->error);
} else {
  echo "Ajout avec succès.";
}

$mysqli->close();
