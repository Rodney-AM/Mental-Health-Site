<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mental Health App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<style type="text/css">
		html{
			background-color: lightblue;
		}
		.bg-body{
			margin: 2% 10%;
			box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
			border-radius: 10px;
			padding: 10px;
		}
	   .form-group{
	   	margin-top: 15px;
	   }
	   .card{
	   box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
	   border-top: 3px solid lightblue;
	   border-radius: 10px;
	   margin: 20px 10px;
	   }
	   .card .card-title{
	   	margin-top: 20px;
	   	margin-left: 20px;
	   }
	</style>
</head>
<body class="bg-body">
	<div class="container">
		<h1 class="text-center text-success">Welcome to your Mental Health Application</h1>

		<div class="row">

			<div class="col-sm-12 col-md-4">
			<img class="img-fluid text-center" src="img/relief.png" alt="Logo">
			</div>
			<div class="col-sm-12 col-md-8">

				<div class="card">
					<div class="card-title">
						<h3 class="text-info">Login Form</h3>
					</div>

					<div class="card-body">
						<form method="POST" action="process.php">

							
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required>
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
							</div>

							
							<hr>
							<div class="form-group">
								<button type="submit" name="loginbtn" id="submit" class="btn btn-success btn-block"> LOGIN</button>

								<a href="createacount.php"> New here? Register</a> | <a href="index.php"> Back home</a>
							</div>

						</form>

					</div>

				</div>

			</div>

		</div>
	</div>
	

</body>
</html>