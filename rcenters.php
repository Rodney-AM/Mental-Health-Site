<?php require "header.php";  ?>

<div class="container">

	<div class="row">

		<div class="col-md-4">

			<?php require "sidebar.php"; ?>

		</div>

		<style type="text/css">
			
			table{
				width: 100%;
				display: block;
				border: 1px solid black;
			}
			thead{
				background-color:deepskyblue;
				font-weight: bolder;

			}
			tbody{
				text-align: center;
			}

		</style>

		<div class="col-md-8" >
			<div id="content">
				<table class="table table-bordered table-responsive">

					<thead>

						<tr>

							<th>Id</th>
							<th>Rehab Center Names</th>
							<th>Contact</th>
							<th>Email</th>
							<th>District</th>
							<th>Address</th>
							<th>Action</th>

						</tr>

					</thead>

					<tbody>

						<?php 

						$sql = mysqli_query($connection, "SELECT * FROM rcenters ORDER BY id DESC");

						if(mysqli_num_rows($sql) > 0){

							while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {											

								?>

							<tr>

								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['rnames']; ?></td>
								<td><?php echo $row['contact']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['dol']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td>
									
									<a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit">Edit</i></a>
									<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times">Delete</i></a>

								</td>

							</tr>
								<?php }} ?>
						</tbody>

					</table>
				</div>
			</div>

		</div>
	</div>

	<?php require "footer.php";  ?>