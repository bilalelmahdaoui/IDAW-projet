<?php
require_once('config.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
}

$requete = "SELECT * FROM Utilisateur WHERE login='${login}';";

$result = $mysqli->query($requete);
$user = $result->fetch_assoc();

if ($user != null) {
  echo json_encode($user);
} else {
  echo "Pas d'utilisateurs";
}

$mysqli->close();
