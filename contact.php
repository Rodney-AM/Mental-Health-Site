
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
						<h3 class="text-info">Contact Form</h3>
					</div>

					<div class="card-body">
						<form method="POST" action="process.php">

							
							<div class="form-group">
								<label>First Name</label>
								<input type="text" name="fname" id="fname" class="form-control" placeholder="Your first name.." required>
							</div>

							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="lname" id="lname" class="form-control" placeholder="Your last name.." required>
							</div>

							<div class="form-group">
								<label>District</label><br>
								<select id="district" name="district">
									<option value="">--Select District--</option>
									<option value="Bushenyi">Bushenyi</option>
									<option value="Mbarara">Mbarara</option>
									<option value="Masaka">Masaka</option>
								</select>
							</div>

							<div class="form-group">
                            <label>Subject</label><br>
                            <textarea name="subject" id="subject" rows="5" cols="40" class="form-control" placeholder="Write something.." required></textarea><br><br>
							</div>

							
							<hr>
							<div class="form-group">
								<button type="submit" name="submit" id="submit" class="btn btn-success btn-block"> Submit</button>

								<a href="index.php"> Back home</a>
							</div>

						</form>

					</div>

				</div>

			</div>

		</div>
	</div>
	

</body>
</html>