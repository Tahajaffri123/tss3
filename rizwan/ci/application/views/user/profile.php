<script type="text/javascript">
	$(document).ready(function(){
		$("#file").change(function(){
			$("#p_pic").submit();
		});
	});
</script>

<div class="container" style="min-height: 600px">
	<h3 class="text-center" style="margin: 80px 0 80px 0">My Profile</h3>
	<div class="row">
		<div class="col-md-6 offset-3">
			<table class="table text-center table-danger table-hover table-bordered">
				<?php 
				if($data['image']=="")
				{
					$path=base_url("images/avatar.jpg");
				}
				else
				{
					$path=base_url("images/".$data['image']);
				}
			 ?>
				<tr>
					<td>Full Name</td>
					<td><?php echo $data["full_name"] ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $data["username"]?></td>
				</tr>
				</tr>
				<form id="p_pic" action="<?php echo site_url('user/image_upload') ?>" method="post" enctype="multipart/form-data">
					<tr>
						<td>Profile Pic</td>
						<td><img src="<?php echo $path; ?>" height="100" width="100"><br>
							<input id="file" type="file" name="userfile">
							<small class="text-danger"><?php echo $this->session->flashdata("msg");  ?></small></td>
					</tr>
				</form>
				<tr>
					<td>Gneder</td>
					<td><?php echo $data["gender"] ?></td>
				<tr>
					<td>contact</td>
					<td><?php echo $data["contact"] ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $data["address"] ?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $data["city"] ?></td>
				</tr>
				<tr>
					<td><a href=" <?php echo site_url('user/edit_profile')?>" class="btn btn-dark">Edit Profile</a></td>
					<td><a href="<?php echo site_url('user/change_pass')?>" class="btn btn-dark">Change Password</a></td>
				</tr>

			</table>
		</div>
	</div>
</div>