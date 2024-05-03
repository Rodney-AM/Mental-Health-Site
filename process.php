<?php

require "dbconntr.php";

if (isset($_POST['create_account'])) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$username = $_POST['username'];
	$dob = date("Y-m-d", strtotime($_POST['dob']));
	$password = md5($_POST['password']);

	$sql = $connection->prepare("INSERT INTO users(fname,lname,contact,email,gender,username,dob,password)
		VALUES(?,?,?,?,?,?,?,?)");
	$sql->bind_param("ssssssss",$fname,$lname,$contact,$email,$gender,$username,$dob,$password);

	$result = $sql->execute();

	if ($result === true) {
		echo"<script> window.alert('Account created successfully. Go to Login');
		window.location.href = 'login.php'; 

		</script>";

	}
	else{
		echo"<script> window.alert('Something went wrong please try again'); 
		window.location.href = 'createacount.php';
		</script>";
	}

}


if (isset($_POST['loginbtn'])){

	$username = $_POST['username'];
	$password = md5($_POST['password']);

$sql = $connection->prepare("SELECT id,fname,lname,email,username FROM users WHERE username=? AND password=?");
$sql->bind_param("ss",$username,$password);
$sql->execute();
$sql->bind_result($id,$fname,$lname,$email,$username);
$sql->store_result();

$row = $sql->fetch();

if(!empty($row)){

		session_start();
	$_SESSION['login'] = true;
	$_SESSION['id'] = $id;
	$_SESSION['uname'] = $username;
	$_SESSION['email'] = $email;
	$_SESSION['names'] = $fname." ".$lname;

echo"<script> window.alert('Login successful!');
		window.location.href = 'home.php'; 

		</script>";
	}

else{
		echo"<script> window.alert('Account not found please register first! or password and username are wrong '); 
		window.location.href = 'login.php';
		</script>";
	}

}

if (isset($_POST['create_account'])) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$username = $_POST['username'];
	$dob = date("Y-m-d", strtotime($_POST['dob']));
	$password = md5($_POST['password']);

	$sql = $connection->prepare("INSERT INTO createaccount(fname,lname,contact,email,gender,username,dob,password)
		VALUES(?,?,?,?,?,?,?,?)");
	$sql->bind_param("ssssssss",$fname,$lname,$contact,$email,$gender,$username,$dob,$password);

	$result = $sql->execute();

	if ($result === true) {
		echo"<script> window.alert('Account created successfully. Go to Login');
		window.location.href = 'login.php'; 

		</script>";

	}
	else{
		echo"<script> window.alert('Something went wrong please try again'); 
		window.location.href = 'form.php';
		</script>";
	}

}


if (isset($_POST['loginbtn'])){

	$username = $_POST['username'];
	$password = md5($_POST['password']);

$sql = $connection->prepare("SELECT id,fname,lname,email,username FROM createaccount WHERE username=? AND password=?");
$sql->bind_param("ss",$username,$password);
$sql->execute();
$sql->bind_result($id,$fname,$lname,$email,$username);
$sql->store_result();

$row = $sql->fetch();

if(!empty($row)){

		session_start();
	$_SESSION['login'] = true;
	$_SESSION['id'] = $id;
	$_SESSION['uname'] = $username;
	$_SESSION['email'] = $email;
	$_SESSION['names'] = $fname." ".$lname;

echo"<script> window.alert('Login successful!');
		window.location.href = 'dashboard.php'; 

		</script>";
	}

else{
		echo"<script> window.alert('Account not found please register first! or password and username are wrong '); 
		window.location.href = 'login.php';
		</script>";
	}

}

if (isset($_POST['psychaitrists_btn'])){

	$names = $_POST['names'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$rcenter = $_POST['rcenter'];
	$expertise = $_POST['expertise'];
	$location = $_POST['location'];

	$sql = $connection->query("INSERT INTO psychiatrists(names,contact,email,gender,rcenter,expertise,location) VALUES('$names','$contact','$email','$gender','$rcenter','$expertise','$location')");

	if ($sql === true) {
		echo"<script> window.alert('Psychiatrist added successfully!');
		window.location.href = 'dashboard.php'; 

		</script>";

	}
	else{
		echo"<script> window.alert('Something went wrong please try again'); 
		window.location.href = 'add_psychaitrists.php';
		</script>";
	}
}

if (isset($_POST['users_btn'])) {
	$names = $_POST['names'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$dor = $_POST['dor'];
	$concern = $_POST['concern'];
	$location = $_POST['location'];

	$sql = $connection->query("INSERT INTO users(names,contact,email,gender,age,dor,concern,location) VALUES('$names','$contact','$email','$gender','$age','$dor','$concern','$location')");

	if ($sql === true) {
		echo"<script> window.alert('User added successfully!');
		window.location.href = 'dashboard.php';

		</script>";
	}
	else{
		echo"<script> window.alert('Something went wrong please try again');
		window.location.href = 'add_users.php';
		</script>";
	}
}

if (isset($_POST['rcenters_btn'])) {
	$names = $_POST['names'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$dol = $_POST['dol'];
	$address = $_POST['address'];

	$sql = $connection->query("INSERT INTO rcenters(rnames,contact,email,dol,address) VALUES('$names','$contact','$email','$dol','$address')");

	if ($sql === true) {
		echo "<script> window.alert('Rehabilitation center aded successfully!');
		window.location.href = 'dashboard.php';
		</script>";
	}
	else{
		echo "<script> window.alert('Something went wrong please try again');
		window.location.href = 'add_rcenters.php'";
	}
}

if (isset($_POST['users_edit'])) {
	
	$names = $_POST['names'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$dor = $_POST['dor'];
	$concern = $_POST['concern'];
	$location = $_POST['location'];
	$id = $_POST['id'];

	$sql = $connection->query("UPDATE users SET names='$names',contact='$contact',email='$email',gender='$gender',
		age='$age',dor='$dor',concern='$concern',location='$location' WHERE id = '$id' ");

	if ($sql === true) {
		echo"<script> window.alert('User updated successfully!');
		window.history.back();

		</script>";
	}
	else{
		echo"<script> window.alert('Something went wrong please try again');
		window.history.back();
		</script>";
	}


	}

// Start the session
session_start();

// Check if user is logged in, redirect to login page if not
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Check if the form was submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $date = $_POST['date'];
    $time = $_POST['time'];
    $reason = $_POST['reason'];

    // TODO: Add validation for form data

    // TODO: Save appointment request to database

    // Redirect to confirmation page
    header("Location: index.php");
    exit();
}
?>