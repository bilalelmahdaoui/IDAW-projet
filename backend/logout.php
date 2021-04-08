<?php
session_start();
if (isset($_SESSION['login'])) {
  unset($_SESSION["login"]);
}
header("Location: http://localhost/IDAW-projet/frontend/login.php");
