<?php include 'db/dbConnection.php';?>
<?php
if(isset($_GET['edited'])) {
    $sql = "select * from studenti INNER JOIN note ON studenti.id = note.student_id  where studenti.id ='{$_GET['id']}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $id= $row['id'];
    $nume = $row['nume'];
    $prenume = $row['prenume'];
    $romana = $row['romana'];
    $mate = $row['mate'];
    $religie = $row['religie'];
    $chimie = $row['chimie'];
    $biologie = $row['biologie'];
    $fizica = $row['fizica'];
    $sport = $row['sport'];
}
?>