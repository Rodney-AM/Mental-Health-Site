<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mental Health App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<style type="text/css">
		html{
			background-color: deepskyblue;
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
			border-top: 3px solid deepskyblue;
			border-radius: 10px;
			margin: 20px 10px;
		}
		.card .card-title{
			margin-top: 20px;
			margin-left: 20px;
		}
		.form-group span{
			color: tomato;
			float: right;
			font-size: 12px;
			font-style: italic !important;
		}
	</style>
	
	<script type="text/javascript">
		function ConfirmPolicy() {
			var checkBox = document.getElementById("policy");
			if (checkBox.checked == true) {
				fname_validate();
				lname_validate();
				 phone_validate();
				 email_validate();
				 gender_validation();
				 ValidateDOB();
				 uname_validate();
				 pass_validate();
				 cpass_validate();
			}
		}
		function checkPolicy(){
			var checkBox = document.getElementById("policy");
			if (checkBox.checked == true) {
				return true;

			}
			else{
				alert("Make sure you agree to terms and policies to continue")
			}
		}
	</script>
</head>
<body class="bg-body">
	<div class="container">
		<h1 class="text-center text-success">Welcome to your Mental Health Application</h1>
		<div class="row">

			<div class="col-sm-12 col-md-4">
				<img class="img-fluid text-center" src="img/your_best_medic.png" alt="Logo">
			</div>
			<div class="col-sm-12 col-md-8">

				<div class="card">
					<div class="card-title">
						<h3 class="text-info">Psychaitrists Registration Form</h3>
					</div>

					<div class="card-body">
						<form method="POST" action="processpsy.php">

							<div class="form-group">
								<label>First Name</label>
								<input type="text" name="fname" id="fname" onkeyup="fname_validate();" class="form-control" placeholder="Enter first name">
								<span id="fname_err"></span>
							</div>

							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="lname" id="lname" onkeyup="lname_validate();" class="form-control" placeholder="Enter last name">
								<span id="lname_err"></span>
							</div>


							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" onkeyup ="  phone_validate();" maxlength="20" name="contact" id="contact" class="form-control" autocomplete="off" placeholder="Enter phone number">
								<span id="phone_err"></span>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" id="email" onkeyup="email_validate();" class="form-control" placeholder="Enter Email">
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
								<label>Rehab Center</label>
								
								<select class="form-control" name="rcenter" id="rcenter" onchange="rcenter_validate();">
									<option value="">--select--</option>
									<option value="one"> Mbarara Rehab Center</option>
									<option value="two"> Butabika Rehab facility</option>
									<option value="three"> Masaka Rehab Center</option>
									<option value="four"> Gulu Rehab Center</option>
									<option value="five"> Fortportal Rehab Center</option>
									<option value="other"> Other</option>

								</select>
								<span id="rcenter_err"></span>

							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" id="password" onkeyup ="pass_validate();" class="form-control" placeholder="Enter Password">
								<span id="pass_err"></span>
							</div>

							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" name="cpassword" id="cpassword" onkeyup ="cpass_validate();" class="form-control" placeholder="Enter Confirm Password">
								<span id="cpass_err"></span>
							</div>
							<hr>
							<h3>Authorisation and Policies</h3>
							<div class="form-group">
								<span>By checking the check box below, I authorize the school to perform a conduct check of my
									student records, to contact the
									person(s) listed above in case of emergency, and to share my contact information with
								participants. </span>

								<input type="checkbox" name="policy" onclick="ConfirmPolicy();" style="width:30px;height: 20px;" id="policy">

							</div>
							<hr>
							<div class="form-group">
								<button type="submit" name="create_account" id="submit" onclick="checkPolicy();" class="btn btn-success btn-block"> Create Account</button>
								<a href="login.php"> Already have an account? Login</a>
							</div>

						</form>

					</div>

				</div>

			</div>

		</div>
	</div>
	<script src="form-validation.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	

</body>
</html>