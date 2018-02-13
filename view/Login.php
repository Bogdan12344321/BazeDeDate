<?php include '../controllers/login.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
                <h2>Login</h2>
                <div class="form-group">
                    <label for="nume">Email</label>
                    <input type="text" class="form-control" id="nume" placeholder="Enter name" name="nume">
                </div>
                <div class="form-group">
                    <label for="parola">Password</label>
                    <input type="password" class="form-control" id="parola" placeholder="Enter parola" name="parola">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Submit</button>
            </form>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
<?php include('../controllers/login.php'); ?>
</body>
</html>