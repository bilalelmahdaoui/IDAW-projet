<!doctype html>
<html lang="en">

<head>
  <title>iMangerMieux</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

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
  /* echo "<h1>" . $errorText . "</h1>";
  echo "<nav>
          <ul>
            <li><a href=\"login.php\">Login</a></li>
            <li><a href=\"index.php\">Back to Homepage</a></li>
          </ul>
        </nav>";
  echo "<h2>Redirecting...</h2>";
  echo `<section class="ftco-section"> */
  echo `<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="login-wrap p-4 p-md-5">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-user-o"></span>
          </div>
          <h3 class="text-center mb-4">Erreur!</h3>
          <h4 class="text-center mb-4">Redirection...</h4>
          <p class="text-center">Il semble qu'il y avait une erreur dans la dernière opération que vous avez fait. Vous allez être rederigé vers la page principale ou la page d'acceuil.</p>
          <h3>
        </div>
      </div>
    </div>
  </div>
</section>`;
  //require_once("http://localhost/IDAW-projet/frontend/erreur.php");
  header("Refresh: 1; URL='${frontendurl}/register.php'");
}

function registrationSucceeded($frontendurl, $login)
{
  //require_once("http://localhost/IDAW-projet/frontend/account_created.php");
  echo `<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="login-wrap p-4 p-md-5">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-user-o"></span>
          </div>
          <h3 class="text-center mb-4">Succès!</h3>
          <h4 class="text-center mb-4">Redirection...</h4>
          <p class="text-center">Votre compte à été crée avec succès<br />
            Vous allez être redériger vers la page de connexion tout de suite!</p>
          <h3>
        </div>
      </div>
    </div>
  </div>
</section>`;
  header("Refresh: 2; URL='${frontendurl}/login.php'");
}

function addUserToDb($mysqli, $login, $password, $nom, $prenom, $date_naissance, $sexe)
{
  $requete = "INSERT INTO Utilisateur (login, password, nom, prenom, sexe, date_naissance) VALUES ('${login}', '${password}', '${nom}', '${prenom}', '${sexe}', '${date_naissance}');";

  $userAdded = $mysqli->query($requete);
  return $userAdded;
}

$mysqli->close();
?>

<script src="http://localhost/IDAW-projet/frontend/js/bootstrap.min.js"></script>
<script src="http://localhost/IDAW-projet/frontend/js/main.js"></script>
<script src="http://localhost/IDAW-projet/frontend/js/login.js"></script>

</body>

</html>