<?php

require "dbconnpsy.php";

if (isset($_POST['create_account'])) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$rcenter = $_POST['rcenter'];
	$password = md5($_POST['password']);

	$sql = $connection->prepare("INSERT INTO tryp(fname,lname,contact,email,gender,rcenter,password)
		VALUES(?,?,?,?,?,?,?)");
	$sql->bind_param("sssssss",$fname,$lname,$contact,$email,$gender,$rcenter,$password);

	$result = $sql->execute();

	if ($result === true) {
		echo"<script> window.alert('Account created successfully. Go to Login');
		window.location.href = 'login.php'; 

		</script>";

	}
	else{
		echo"<script> window.alert('Something went wrong please try again'); 
		window.location.href = 'psychform.php';
		</script>";
	}

}


?>