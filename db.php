<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_sportrewards";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>
