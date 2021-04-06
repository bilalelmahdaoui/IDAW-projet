<?php
require_once('config.php');

$requete = "SELECT * FROM Utilisateur;";
$result = $mysqli->query($requete);

if (isset($_SESSION['login'])) {
  $successfullyLogged = true;
} else if (isset($_POST['login']) && isset($_POST['password'])) {
  $tryLogin = $_POST['login'];
  $tryPwd = $_POST['password'];
  while ($row = $result->fetch_assoc()) {
    if ($tryLogin == $row["login"] && $tryPwd == $row["password"]) {
      session_start();
      $successfullyLogged = true;
      $_SESSION['login'] = $row["login"];
    }
  }
}

if ($successfullyLogged == false) {
  header("Location: http://localhost/IDAW-projet/frontend/login.php");
} else {
  header("Location: http://localhost/IDAW-projet/frontend/aliments.php");
  exit();
}

$mysqli->close();
