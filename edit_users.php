<?php require "header.php";  ?>

<div class="container">

	<div class="row">

		<div class="col-md-4">
			
			<?php require "sidebar.php"; ?>

		</div>

		<div class="col-md-8" >
			<div id="content">

				<?php

				$id = $_GET['id'];
				$sql = mysqli_query($connection, "SELECT * FROM users WHERE id = '$id' ");
				$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);


				?>

				<form method="POST" action="process.php" class="myform">
					
					<h4 class="text-center">Update Users</h4><hr>

					<input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">

					<div class="form-group">
						
						<label>Full names</label>
						<input type="text" name="names" id="names" onkeyup="name_validate();" class="form-control" value="<?php echo $row['names']; ?>" required>
						<span id="name_err"></span>

					</div>

					<div class="form-group">
								<label>Phone Number</label>
								<input type="text"  name="contact" id="contact" onkeyup ="  phone_validate();" maxlength="20" class="form-control" autocomplete="off" value="<?php echo $row['contact']; ?>" required>
								<span id="phone_err"></span>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" id="email" onkeyup="email_validate();" class="form-control" value="<?php echo $row['email']; ?>" required>
								<span id="email_err"></span>
							</div>

							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender" id="gender" onchange="gender_validation();" required>
									<option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
									<option value="male"> Male</option>
									<option value="female"> Female</option>
									<option value="other"> Other</option>
								</select>
								<span id="gender_err"></span>
							</div>

							<div class="form-group">
								<label>Age</label>
								<select class="form-control" name="age" id="age" onchange="age_validate();" required>
									<option value="<?php echo $row['age']; ?>"><?php echo $row['age']; ?></option>
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
									<option value="<?php echo $row['dor']; ?>"><?php echo $row['dor']; ?></option>
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
								<input type="text" name="concern" id="concern" onkeyup="concern_validate();" class="form-control" value="<?php echo $row['concern']; ?>" required> 
								<span id="concern_err"></span>


							</div>

							<div class="form-group">
								
								<label>Address/Location</label>
								<textarea name="location" id="location" onkeyup="location_validate();" class="form-control" value="<?php echo $row['location']; ?>" rows="3" required><?php echo $row['location']; ?></textarea>
								<span id="location_err"></span>
							</div>

							<hr>

							<button class="btn btn-primary" type="submit" name="users_edit"> Update User</button>


				</form>
			</div>
		</div>

	</div>
</div>
<script src="form-validation.js" type="text/javascript"></script>
<?php require "footer.php";  ?>