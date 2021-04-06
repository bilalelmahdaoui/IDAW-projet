<?php
session_start();
echo "hh";
if (!isset($_SESSION['login'])) {
  header("Location: frontend/login.php");
} else {
  header("Location: frontend/aliments.php");
  exit();
}
