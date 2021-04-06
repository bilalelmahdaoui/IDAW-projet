<?php
require_once('config.php');

if (isset($_POST['login'])) {
  $login = $_POST['login'];
}

if (isset($_POST['password'])) {
  $password = $_POST['password'];
}

$requete = "SELECT * FROM Utilisateur WHERE login='${login}' AND password='${password}';";

//echo $requete;

$result = $mysqli->query($requete);
$user = $result->fetch_assoc();

if ($user != null) {
  echo json_encode($user);
} else {
  echo "{}";
}

$mysqli->close();
