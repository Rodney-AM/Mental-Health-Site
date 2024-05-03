<?php

require "dbconntr.php";

session_start();

if (isset($_SESSION['login']) && isset($_SESSION['id'])){

	$uname = $_SESSION['uname'];
	$userid = $_SESSION['id'];
	$uemail = $_SESSION['email'];
	$unames = $_SESSION['names'];


}



else{

	echo "<script> window.location.href = 'login.php';
	</script>";

}


if (isset($_GET['delete_id'])) {
	
	$del_id = $_GET['delete_id'];

	$ext = explode("-", $del_id);

	$id = $ext[0];
	$table =$ext[01];

	$del_sql = $connection->query("DELETE FROM $table WHERE id = '$id'");

	if ($del_sql === true) {
		echo"<script> window.alert('User data deleted successfully!');
		window.history.back();

		</script>";
	}
	else{
		echo"<script> window.alert('Something went wrong please try again');
		window.history.back();
		</script>";
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
</head>
<body>
	<div class="row nav-bar">
		<div class="col-md-1 col-sm-2"><img class="img-fluid " src="img/your_best_medic.png" alt="Logo"></div>
			<div class="col-md-7 col-sm-6">
				
				<h2 id="nav-title">Mental Health System</h2>

			</div>

		<div class="col-md-4 col-sm-4">
			<p id="nav-user">Hello! <?php  echo $unames; ?> <a href="logout.php" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to leave?');">Logout</a></p>

		</div>
		

	</div>