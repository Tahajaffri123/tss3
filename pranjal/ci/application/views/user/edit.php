<div class="container" style="min-height: 600px;">
	<h2>Edit Profile</h2>
	<div class="row">
		<div class="col-md-6 offset-2">
			<form action="<?php echo site_url("user/update")?>" method="post">
				<div class="form-group">
					<label><b>Full Name</b></label>
					<input type="text" value="<?php echo $data['full_name']?>" name="full_name" class="form-control" selected='selected'>
				</div>
				<div class="form-group">
					<label><b>UserName/Email</b></label>
					<input type="text" value="<?php echo $data['username']?>" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label><b>Contact</b></label>
					<input type="text" value="<?php echo $data['contact']?>" name="contact" class="form-control">
				</div>
				<div class="form-group">
					<label><b>Address</b></label>
					<textarea class="form-control" name="add"><?php echo $data['address'];?></textarea>
				</div>
				<div class="form-group">
					<label><b>City</b></label>
					<select class="form-control">
						<option value="">Select</option>
						<option <?php if($data['city']=="mumbai") echo "selected='selected'"?> value="indore">Mumbai</option>
						<option <?php if($data['city']=="pune") echo "selected='selected"?> value="pune">Pune</option>
						<option <?php if($data['city']=="indore")?> value="indor">Indore</option>
						<option <?php if($data['city']=="bhopal") echo "selected='selected'"?> value="bhopal">Bhopal</option>
					</select>
				</div>
				<div class="form-group">
					<label><b>Gender : </b></label>
					Female <input <?php if($data['gender']=="female") echo "checked='checked'"?> type="radio" name="gender" value="female" >
					Male <input <?php if($data['gender']=="male") echo "checked='checked'"?> type="radio" name="gender" value="male" >
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-primary" value="update">
				</div>
			</form>
		</div>
	</div>
</div>