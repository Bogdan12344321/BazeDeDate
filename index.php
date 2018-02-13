<?php include 'controllers/db/dbConnection.php' ?>
<?php include 'controllers/delete.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scoala Generala Nr.2</title>
    <link rel = "stylesheet" type = "text/css" href = "style/css/style.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="controllers/js/pagination.js"></script>
    <link href="style/css/pagination.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="controllers/js/paging.js"></script>

</head>
<body>
<header>
    <nav>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="view/insert.php">Insert</a></li>
        <li><a href="#about">About</a></li>
    </nav>
</header>
<menu>
    <table id="table" class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Romana</th>
            <th>Matematica</th>
            <th>Biologie</th>
            <th>Religie</th>
            <th>Chimie</th>
            <th>Fizica</th>
            <th>Sport</th>
            <th>Comenzi</th>
        </tr>
        </thead>

        <tbody>
        <?php  $result=mysqli_query($con,"SELECT * FROM studenti INNER JOIN note on studenti.id = note.student_id "); ?>
        <?php while($row = mysqli_fetch_array($result)){
            $id=$row['id'];
            ?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $row['nume']; ?></td>
            <td><?php echo $row['prenume'];?></td>
            <td><?php echo $row['romana'];?></td>
            <td><?php echo $row['mate'];?></td>
            <td><?php echo $row['biologie'];?></td>
            <td><?php echo $row['religie'];?></td>
            <td><?php echo $row['chimie'];?></td>
            <td><?php echo $row['fizica'];?></td>
            <td><?php echo $row['sport'];?></td>

            <td>
                <a href="view/Edit.php?edited=1&id=<?php echo $id; ?>"
                    <button type="button" id="edit" class="btn btn-primary">Edit</button>
                </a>
                <a href="?delete=<?php echo $id; ?>">
                     <button type="button"  class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
            <?php
                }
             ?>
        </tbody>
    </table>
</menu>
<footer>

</footer>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').paging({limit:10});
    });
</script>
<script type="text/javascript">
</body>
</html>