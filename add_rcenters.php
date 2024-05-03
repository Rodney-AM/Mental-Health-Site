<?php require "header.php";  ?>

<div class="container">

	<div class="row">

		<div class="col-md-4">
			
			<?php require "sidebar.php"; ?>

		</div>

		<div class="col-md-8" >
			<div id="content">
				<form method="POST" action="process.php" class="myform">
					
					<h4 class="text-center">Add new Rehabilitation Center</h4><hr>

					<div class="form-group">
						
						<label>Rehabilitacion Center Name</label>
						<input type="text" name="names" id="names" onkeyup="rname_validate();" class="form-control" placeholder="Enter Rehablitation center names" required>
						<span id="rname_err"></span>

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
								<label>District of Location</label>
								
								<select class="form-control" name="dol" id="dol" onchange="dol_validate();" required>
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
								<span id="dol_err"></span>
							</div>

							<div class="form-group">
								
								<label>Address/Location</label>
								<textarea name="address" id="location" onkeyup="location_validate();" class="form-control" placeholder="Type Address or Location" rows="3" required></textarea>
								<span id="location_err"></span>
							</div>

							<hr>

							<button class="btn btn-primary" type="submit" name="rcenters_btn"> Add Rehabilitation Center</button>


				</form>
			</div>
		</div>

	</div>
</div>
<script src="form-validation.js" type="text/javascript"></script>
<?php require "footer.php";  ?>