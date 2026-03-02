<?php
$host = "mysql-gestioncontact.alwaysdata.net"; // Hôte visible sur votre interface
$user = "gestioncontact"; // Votre nom d'utilisateur Alwaysdata
$pass = "VOTRE_MOT_DE_PASSE"; // Le mot de passe de votre compte
$dbname = "gestioncontact_bd"; // Le nom de la base que vous avez créée

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}
?>