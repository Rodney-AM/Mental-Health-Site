<?php require "header.php";  ?>

<div class="container">

	<div class="row">

		<div class="col-md-4">
			
			<?php require "sidebar.php"; ?>

		</div>

		<div class="col-md-8" >
			<div id="content">
				<form method="POST" action="process.php" class="myform">
					
					<h4 class="text-center">Add new Users</h4><hr>

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
								<label>Age</label>
								<select class="form-control" name="age" id="age" onchange="age_validate();" required>
									<option value="">--select--</option>
									<option value="12-17years"> 12-17years</option>
									<option value="18-24years"> 18-24years</option>
									<option value="25-36years"> 25-36years</option>
									<option value="37-45years"> 37-45years</option>
									<option value="46years_and_above"> 46years and above</option>
								</select>
								<span id="age_err"></span>
							</div>

							<div class="form-group">
								<label>District of Residence</label>
								
								<select class="form-control" name="dor" id="dor" onchange="dor_validate();" required>
									<option value="">--select--</option>
									<option value="Bushenyi"> Bushenyi</option>
									<option value="Mbarara"> Mbarara</option>
									<option value="Isingiro"> Isingiro</option>
									<option value="Masaka"> Masaka</option>
									<option value="Fortportal">Fortportal</option>
									<option value="Gulu"> Gulu</option>
									<option value="Kitgum"> Kitgum</option>
									<option value="Arua"> Arua</option>
									<option value="Kasese"> Kasese</option>
									<option value="Sheema"> Sheema</option>
									<option value="Mukono"> Mukono</option>
									<option value="Mitooma"> Mitooma</option>
									<option value="Ntungamo"> Ntungamo</option>
									<option value="other"> Other</option>

								</select>
								<span id="dor_err"></span>
							</div>

							<div class="form-group">
								
								<label>Concern</label>
								<input type="text" name="concern" id="concern" onkeyup="concern_validate();" class="form-control" placeholder="Enter expertise" required> 
								<span id="concern_err"></span>


							</div>

							<div class="form-group">
								
								<label>Address/Location</label>
								<textarea name="location" id="location" onkeyup="location_validate();" class="form-control" placeholder="Type Address or Location" rows="3" required></textarea>
								<span id="location_err"></span>
							</div>

							<hr>

							<button class="btn btn-primary" type="submit" name="users_btn"> Add User</button>


				</form>
			</div>
		</div>

	</div>
</div>
<script src="form-validation.js" type="text/javascript"></script>
<?php require "footer.php";  ?>