
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
						<h3 class="text-info">Request Appointment</h3>
					</div>

					<div class="card-body">
						<form method="POST" action="process.php">

						<div class="form-group">
								<label>First Name</label>
								<input type="text" name="fname" id="fname" onkeyup="fname_validate();" class="form-control" placeholder="Enter first name" required>
								<span id="fname_err"></span>
							</div>

							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="lname" id="lname" onkeyup="lname_validate();" class="form-control" placeholder="Enter last name" required>
								<span id="lname_err"></span>
							</div>


							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" onkeyup ="  phone_validate();" maxlength="20" name="contact" id="contact" class="form-control" autocomplete="off" placeholder="Enter phone number" required>
								<span id="phone_err"></span>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" id="email" onkeyup="email_validate();" class="form-control" placeholder="Enter Email" required>
								<span id="email_err"></span>
							</div>
							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender" id="gender" onchange="gender_validation();">
									<option value="">--select--</option>
									<option value="male"> Male</option>
									<option value="female"> Female</option>
									<option value="other"> Other</option>
								</select>
								<span id="gender_err"></span>
							</div>
							<div class="form-group">
								<label>Date Of Birth</label>
								<input type="date" name="dob" class="form-control" id="dob" onblur="ValidateDOB();" placeholder="dd/mm/yyyy">
								<span id="dob_err"></span>
							</div>

                        
                        <div class="form-group">
								<label>Date</label><br>
								<input type="date" name="dob" class="form-control" id="dob" onblur="ValidateDOB();" placeholder="dd/mm/yyyy" required>
								<span id="dob_err"></span>
							</div>

							<div class="form-group">
								<label>Time</label><br>
								<input type="time" name="time" id="time" class="form-control" placeholder="Enter time" required>
							</div>

							<div class="form-group">
                            <label>Reason</label><br>
                            <textarea name="reason" rows="5" cols="40" class="form-control" placeholder="Write something.." required></textarea><br><br>
							</div>

							<hr>
							<div class="form-group">
								<button type="submit" name="submit" id="submit" class="btn btn-success btn-block"> Submit</button>

								<a href="index.php"> Back to home page </a>
							</div>

						</form>

					</div>

				</div>

			</div>

		</div>
	</div>
	

</body>
</html>