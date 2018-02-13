<?php include '../controllers/db/dbConnection.php' ?>
<?php include '../controllers/insert.php' ?>
<?php
if(isset($_GET['deleted'])){
    $delete_id = $_GET['deleted'];
    $result = mysqli_query($con,"DELETE FROM studenti WHERE id='$delete_id'");
    if($result){
        header("location:insert.php");
    }else{
        alert("Fail to delete data");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scoala Generala Nr.2</title>
    <link rel = "stylesheet" type = "text/css" href = "../style/css/style.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <nav>
        <li><a class="active" href="../index.php">Home</a></li>
        <li><a href="insert.php">Insert</a></li>
        <li><a href="#about">About</a></li>
    </nav>
</header>
<menu>
    <form class="form-container" method="post" action="">
        <div class="form-group">
            <label for="nume">Nume:</label>
            <input type="text" class="form-control" id="nume" name="nume">
        </div>
        <div class="form-group">
            <label for="prenume">Prenume:</label>
            <input type="text" class="form-control" id="prenume" name="prenume">
        </div>
        <button type="submit" name="submit" value="submit"  class="btn btn-primary btn-block">Submit</button>
    </form>
    <section>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nume</th>
                <th>Prenume</th>
            </tr>
            </thead>

            <tbody>
            <?php  $result=mysqli_query($con,"SELECT * FROM studenti"); ?>
            <?php while($row = mysqli_fetch_array($result)){
                $id=$row['id'];
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $row['nume']; ?></td>
                    <td><?php echo $row['prenume'];?></td>
                    <td>
                        <a href="?deleted=<?php echo $id; ?>">
                            <button type="button"  class="btn btn-danger">Delete</button>
                        </a>
                        <a href="addgrades.php?edited=1&id=<?php echo $id; ?>">
                            <button type="button"  class="btn btn-success">Add Grades</button>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </section>
</menu>
</body>
</html>