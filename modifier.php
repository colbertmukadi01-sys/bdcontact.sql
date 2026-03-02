<?php 
include('config.php');
$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM TContact WHERE IDC=$id");
$row = mysqli_fetch_assoc($res);

if(isset($_POST['update'])){
    $n = $_POST['nom']; $t = $_POST['tel']; $e = $_POST['email'];
    mysqli_query($conn, "UPDATE TContact SET Nom='$n', Telephone='$t', Email='$e' WHERE IDC=$id");
    header("Location: liste.php");
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Modifier le Contact</h2>
    <form method="POST">
        <input type="text" name="nom" value="<?php echo $row['Nom']; ?>"><br><br>
        <input type="text" name="tel" value="<?php echo $row['Telephone']; ?>"><br><br>
        <input type="email" name="email" value="<?php echo $row['Email']; ?>"><br><br>
        <button type="submit" name="update">Mettre à jour</button>
    </form>
</body>
</html>