<?php include 'db/dbConnection.php';
if(isset($_POST['submit'])) {
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $sql = "INSERT INTO studenti(nume,prenume) VALUES ('$nume','$prenume')";
    mysqli_query($con, $sql);
    header("location: insert.php");
}
?>