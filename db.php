<?php
$host = 'localhost';
$dbname = 'bdcontact'; // le nom que j'ai vu sur ta photo
$user = 'root';
$pass ='';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);*
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_EXCEPTION);
    // on ne met rien ici ça marche, pour rester discret
} catch(PDOException $e) {
    die("Erreur : ". $e ->getMessage());
}
?>