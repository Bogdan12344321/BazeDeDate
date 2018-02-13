<?php include 'db/dbConnection.php';?>
<?php
if(isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $result = mysqli_query($con, "DELETE FROM note WHERE student_id='$delete_id'");
    if ($result) {
        header("location:index.php");
    } else {
        alert("Fail to delete data");
    }
}
?>