
<div class="container" style="min-height: 600px;">
	<h2>My Profile</h2>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<?php 
				// $data = $result->row_array();
				// print_r($data);
			 ?>
			<table class="table table-hover table-bordered">
				<tr>
					<td>Full Name</td>
					<td><?php echo $data['full_name'] ?></td>
				</tr>
				<tr>
					<td>Username/Email</td>
					<td><?php echo $data['username'] ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $data['address'] ?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $data['city'] ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $data['gender'] ?></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><?php echo $data['contact'] ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>

