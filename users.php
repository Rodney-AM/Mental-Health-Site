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
				<table width="100%" class="table table-bordered table-responsive">

					<thead>

						<tr>

							<th>Id</th>
							<th>Names</th>
							<th>Contact</th>
							<th>Email</th>
							<th>Gender</th>
							<th>Age</th>
							<th>District</th>
							<th>Concern</th>
							<th>Address</th>
							<th>Action</th>

						</tr>

					</thead>

					<tbody>

						<?php 

						$sql = mysqli_query($connection, "SELECT * FROM users ORDER BY id ASC");

						if(mysqli_num_rows($sql) > 0){

							while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {											

								?>

							<tr>

								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['names']; ?></td>
								<td><?php echo $row['contact']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['gender']; ?></td>
								<td><?php echo $row['age']; ?></td>
								<td><?php echo $row['dor']; ?></td>
								<td><?php echo $row['concern']; ?></td>
								<td><?php echo $row['location']; ?></td>
								<td>
									
									<a href="edit_users.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-edit">Edit</i></a>
									<a href="?delete_id=<?php echo $row['id']; ?>-users" onclick="return confirm('Are you sure you want to delete permanently?')" class="btn btn-sm btn-danger"><i class="fa fa-trash">Delete</i></a>

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