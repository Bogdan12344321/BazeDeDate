<?php
include 'db/dbConnection.php';
if(isset($_POST['submit'])){
        $nume = $_POST['nume'];
        $password = $_POST['parola'];

        $sql = "SELECT * FROM profesori WHERE nume = '$nume' AND parola = '$password'";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result) == 1) {
            $_SESSION['message'] = "You are now logged in!";
            $_SESSION['email'] = $nume;
            header("location: ../index.php");
        }
}
?>