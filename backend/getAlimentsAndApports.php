<?php
require_once('config.php');

$requete = "SELECT  nom_aliment,
                    calories.valeur_moyenne AS calories,
                    eau.valeur_moyenne AS eau,
                    proteines.valeur_moyenne AS proteines,
                    glucides.valeur_moyenne As glucides
            FROM Aliment
            LEFT JOIN offrir AS calories ON aliment.id_aliment = calories.id_aliment AND calories.id_apport=0 
            LEFT JOIN offrir AS eau ON aliment.id_aliment = eau.id_aliment AND eau.id_apport=1
            LEFT JOIN offrir AS proteines ON aliment.id_aliment = proteines.id_aliment AND Glu.id_apport=2
            LEFT JOIN offrir AS glucides ON aliment.id_aliment = glucides.id_aliment AND Lip.id_apport=3;";
$result = $mysqli->query($requete);
$results = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $results[] = $row;
  }
  echo json_encode($results);
} else {
  echo "Pas d'aliments!";
}
$mysqli->close();
