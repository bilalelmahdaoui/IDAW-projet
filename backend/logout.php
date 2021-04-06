<?php
session_start();
if (isset($_SESSION['login'])) {
  echo "<h1>See you later " . $_SESSION['login'] . "!</h1>
          <p>You've successfully logged out!</p>";
  unset($_SESSION["login"]);
} else {
  echo "<h1>Error! You're not even logged in.</h1>";
}
echo "<h2>Redirecting...</h2>";
header("Refresh: 2; URL='http://localhost/IDAW-projet/frontend/login.php'");
