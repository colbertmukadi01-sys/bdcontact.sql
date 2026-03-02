<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Contact</title>
</head>
<body>
    <h2>Informations Contacts</h2>
    <form method="POST">
        <label>Nom :</label><br>
        <input type="text" name="nom" placeholder="votre nom" required><br><br>
        
        <label>Téléphone :</label><br>
        <input type="text" name="tel" placeholder="votre numéro de téléphone" required><br><br>
        
        <label>E-mail :</label><br>
        <input type="email" name="email" placeholder="votre e-mail" required><br><br>
        
        <button type="submit" name="valider">Soumettre</button>
    </form>

    <?php
    if(isset($_POST['valider'])){
        $nom = $_POST['nom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO TContact (Nom, Telephone, Email) VALUES ('$nom', '$tel', '$email')";
        if(mysqli_query($conn, $sql)){
            echo "<p style='color:green;'>Contact ajouté avec succès !</p>";
        }
    }
    ?>
</body>
</html>