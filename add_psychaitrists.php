<?php require "header.php";  ?>

<div class="container">

	<div class="row">

		<div class="col-md-4">
			
			<?php require "sidebar.php"; ?>

		</div>

		<div class="col-md-8" >
			<div id="content">
				<form method="POST" action="process.php" class="myform">
					
					<h4 class="text-center">Add new Psychaitrists</h4><hr>

					<div class="form-group">
						
						<label>Full names</label>
						<input type="text" name="names" id="names" onkeyup="name_validate();" class="form-control" placeholder="Enter full names" required>
						<span id="name_err"></span>

					</div>

					<div class="form-group">
								<label>Phone Number</label>
								<input type="text"  name="contact" id="contact" onkeyup ="  phone_validate();" maxlength="20" class="form-control" autocomplete="off" placeholder="Enter phone number" required>
								<span id="phone_err"></span>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" id="email" onkeyup="email_validate();" class="form-control" placeholder="Enter Email" required>
								<span id="email_err"></span>
							</div>

							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender" id="gender" onchange="gender_validation();" required>
									<option value="">--select--</option>
									<option value="male"> Male</option>
									<option value="female"> Female</option>
									<option value="other"> Other</option>
								</select>
								<span id="gender_err"></span>
							</div>
							

							<div class="form-group">
								<label>Rehab Center</label>
								
								<select class="form-control" name="rcenter" id="rcenter" onchange="rcenter_validate();" required>
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
								
								<label>Expertise</label>
								<input type="text" name="expertise" id="expertise" onkeyup="expertise_validate();" class="form-control" placeholder="Enter expertise" required> 
								<span id="expertise_err"></span>


							</div>

							<div class="form-group">
								
								<label>Address/Location</label>
								<textarea name="location" id="location" onkeyup="location_validate();" class="form-control" placeholder="Type Address or Location" rows="3" required></textarea>
								<span id="location_err"></span>
							</div>

							<hr>

							<button class="btn btn-primary" type="submit" name="psychaitrists_btn"> Add Psychaitrist</button>


				</form>
			</div>
		</div>

	</div>
</div>
<script src="form-validation.js" type="text/javascript"></script>
<?php require "footer.php";  ?>