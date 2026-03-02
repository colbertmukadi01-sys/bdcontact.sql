<? php
include('config.php);
if(isset($_GET["id])){
    $id= $_GET['id'];
    mysqli_query($conn, "DELETE FROM Tcontact WHERE IDC=$id");
}
header("location: liste.php);
?>