<?php

$server = "localhost";
$dbname = "trial";
$dbuser = "root";
$dbpassword = "";

$connection = mysqli_connect($server, $dbuser, $dbpassword, $dbname);

if(mysqli_connect_error()){
	echo "Server connection error".mysqli_connect_errno();
}

?>