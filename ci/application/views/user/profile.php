<script>
	$(document).ready(function(){
		$("#file").change(function(){
			$("#my_from").submit();
		});
	});
</script>
<div class="container" style="min-height: 600px;">
	<h2>My Profile</h2>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<?php 
				if($data['image']=="")
				{
					$path=base_url("images/avatar.png");
				}
				else
				{
					$path=base_url("images/".$data['image']);
				}
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
				<form id="my_from" action="<?php echo site_url('user/image_upload') ?>" method="post" enctype="multipart/form-data">
					
				<tr>
					<td>Image</td>
					<td><img src="<?php echo $path; ?>" heighit="80" width="80"/><br />
						<input id="file" name="userfile" type="file" />
					<small class="text-danger">
						<?php echo $this->session->flashdata("msg"); ?>
					</small>
					</td>
				</tr>
				</form>
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
			<a href="<?php echo site_url('user/edit') ?>" class="btn btn-info">Edit</a>
			<a href="<?php echo site_url('user/change_pass') ?>" class="btn btn-info">Change Password</a>
		</div>
	</div>
</div>

