<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=$_POST['password'];
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0) {
    $_SESSION['alogin'] = $_POST['username'];
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else {
    echo "<script>alert('Invalid Details');</script>";
}


}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Ladakh Bike Rental | Admin Login</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="login-page bk-img" style="background-image: url(img/adminlogin.jpg);">
	<div class="form-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center text-bold text-light mt-4x">ADMIN LOGIN</h1>
                <div class="well row pt-2x pb-3x bk-light transparent-bg">
                    <div class="col-md-8 col-md-offset-2">
                        <form method="post">
                            <label for="" class="text-uppercase text-sm text-dark">Username </label>
                            <input type="text" placeholder="Username" name="username" class="form-control mb">

                            <label for="" class="text-uppercase text-sm text-dark">Password</label>
                            <input type="password" placeholder="Password" name="password" class="form-control mb">

                            <button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	</div>



	<style>
    .transparent-bg {
        background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
        border-radius: 8px; /* Rounded corners */
        padding: 20px; /* Inner spacing */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); /* Slight shadow for contrast */
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.8); /* Slightly opaque input fields */
        color: #000; /* Text color for inputs */
    }

    .form-control:focus {
        background-color: rgba(255, 255, 255, 0.9); /* Slightly more opaque when focused */
        box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.5); /* Blue shadow on focus */
    }

    .btn-primary {
        background-color: rgba(0, 123, 255, 0.8); /* Semi-transparent button */
        border: none;
    }

    .btn-primary:hover {
        background-color: rgba(0, 123, 255, 1); /* Fully opaque on hover */
    }

    .text-dark {
        color: #000; /* Black text */
    }
</style>
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
