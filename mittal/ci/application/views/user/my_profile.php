<div class="container" style="min-height: 600px;">
	<br />
	<br />
	<h2><center>My-Profile</center></h2>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<table class="table table-dark table-bordered table-hover">
				<?php
				// $data = $result->row_array();
				// print_r($data);
				// die;
				?>
				<tr>
					<td>Full Name</td>
					<td><?php echo $data['full_name']; ?></td>	
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $data['username']; ?></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><?php echo $data['contact']; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $data['address']; ?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $data['city']; ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $data['gender']; ?></td>
				</tr>
			</table>
			<div>
				<a href="<?php echo site_url("user/edit")?>" class="btn btn-info">Edit</a>
				<a href="<?php echo site_url("user/change_password")?>" class="btn btn-info">Change Password</a>

			</div>
		 </div>
	  </div>
   </div>
</div>