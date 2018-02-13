<?php include '../controllers/db/dbConnection.php'?>
<?php
if(isset($_GET['edited'])) {
    $sql = "select * from studenti INNER JOIN note WHERE studenti.id ='{$_GET['id']}'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    $row = mysqli_fetch_array($result);
    $id= $_GET['id'];
    $nume = $row['nume'];
    $prenume = $row['prenume'];
    $romana = $row['romana'];
    $mate = $row['mate'];
    $religie = $row['chimie'];
    $chimie = $row['chimie'];
    $biologie = $row['biologie'];
    $fizica = $row['fizica'];
    $sport = $row['sport'];
}

if(isset($_POST['update'])){
    $romana=$_POST['romana'];
    $mate=$_POST['mate'];
    $religie=$_POST['religie'];
    $chimie=$_POST['chimie'];
    $biologie=$_POST['biologie'];
    $fizica=$_POST['fizica'];
    $sport=$_POST['sport'];
    $sql = "INSERT INTO note (student_id,romana,mate,religie,chimie,biologie,fizica,sport) VALUES('$id','$romana','$mate','$religie','$chimie','$biologie','$fizica','$sport')";
    $query = mysqli_query($con,$sql);
    if($query){
        header("location: ../index.php");
    }

}
if(isset($_POST['cancel'])){
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/css/forms.css"/>
</head>
<body>
<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">

            <form class="form-container" method="post" action="">
                <h2>Edit</h2>
                <div class="form-group">
                    <label for="nume">Nume</label>
                    <input type="text" class="form-control" id="nume" name="nume"
                           value="<?php echo $nume;?>">
                </div>
                <div class="form-group">
                    <label for="prenume">Prenume</label>
                    <input type="text" class="form-control" id="prenume" name="prenume"
                           value="<?php echo $prenume;?>">
                </div>
                <div class="form-group">
                    <label for="romana">Romana</label>
                    <input type="text" class="form-control" id="romana" name="romana">
                </div>
                <div class="form-group">
                    <label for="mate">Mate</label>
                    <input type="text" class="form-control" id="mate" name="mate">
                </div>
                <div class="form-group">
                    <label for="religie">Religie</label>
                    <input type="text" class="form-control" id="religie" name="religie">
                </div>
                <div class="form-group">
                    <label for="chimie">Chimie</label>
                    <input type="text" class="form-control" id="chimie" name="chimie">
                </div>
                <div class="form-group">
                    <label for="biologie">Biologie</label>
                    <input type="text" class="form-control" id="biologie" name="biologie">
                </div>
                <div class="form-group">
                    <label for="fizica">Fizica</label>
                    <input type="text" class="form-control" id="fizica" name="fizica">
                </div>
                <div class="form-group">
                    <label for="prenume">Sport</label>
                    <input type="sport" class="form-control" id="sport" name="sport">
                </div>

                <button type="submit" name="update" value="submit" class="btn btn-success btn-block">Insert</button>
                <a href="../index.php">
                    <button type="submit" name="cancel" value="submit" class="btn btn-danger btn-block">Cancel</button>
                </a>
            </form>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
</body>
</html>