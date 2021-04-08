<?php
require("config.php");

$errorText = "";

if (isset($_POST['login']) && isset($_POST['password'])) {
  $tryLogin = $_POST['login'];
  $trypassword = $_POST['password'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date_naissance = $_POST['date_naissance'];
  $sexe = $_POST['sexe'];
  $userAdded = addUserToDb($mysqli, $tryLogin, $trypassword, $nom, $prenom, $date_naissance, $sexe);

  if ($userAdded) {
    registrationSucceeded($frontendurl, $tryLogin);
  } else {
    $errorText = "Erreur! Merci d'esssayer avec autre login.";
    showRegistrationError($frontendurl, $errorText);
  }
} else {
  $errorText = "Erreur! Merci d'utiliser le formulaire de login.";
  showRegistrationError($frontendurl, $errorText);
}

function showRegistrationError($frontendurl, $errorText)
{
  echo "<h1>" . $errorText . "</h1>";
  echo "<nav>
          <ul>
            <li><a href=\"login.php\">Login</a></li>
            <li><a href=\"index.php\">Back to Homepage</a></li>
          </ul>
        </nav>";
  echo "<h2>Redirecting...</h2>";
  require_once("http://localhost/IDAW-projet/frontend/infos.php");
  showinfos();
  header("Refresh: 2; URL='${frontendurl}/register.php'");
}

function registrationSucceeded($frontendurl, $login)
{
  require_once("http://localhost/IDAW-projet/frontend/account_created.php");
  header("Refresh: 2; URL='${frontendurl}/login.php'");
}

function addUserToDb($mysqli, $login, $password, $nom, $prenom, $date_naissance, $sexe)
{
  $requete = "INSERT INTO Utilisateur (login, password, nom, prenom, sexe, date_naissance) VALUES ('${login}', '${password}', '${nom}', '${prenom}', '${sexe}', '${date_naissance}');";

  $userAdded = $mysqli->query($requete);
  return $userAdded;
}

$mysqli->close();
