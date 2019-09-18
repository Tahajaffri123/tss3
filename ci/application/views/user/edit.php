
<div class="container" style="min-height: 600px;">
	<h2>Update Profile</h2>
	<div class="row">
		<?php $data=$result->row_array() ?>
		<div class="col-md-6 offset-md-3">
		<form action="<?php echo site_url('user/update') ?>" method="post">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" value="<?php echo $data['full_name'] ?>" name="full_name" class="form-control"/>
				

			</div>
			<div class="form-group">
				<label>Email</label>
				<input disabled="disabled" type="text" value="<?php echo $data['username'] ?>" name="username" class="form-control"/>
				
			</div>
			
			<div class="form-group">
				<label>Contact</label>
				<input value="<?php echo $data['contact']; ?>" type="text" name="contact" class="form-control" />
				
			</div>
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control" name="add"><?php echo $data['address'];?></textarea>
				
			</div>
			<div class="form-group">
				<label>City</label>
				<select class="form-control" name="city">
					<option value="">Select</option>
					<option <?php if($data['city']=="indore") echo "selected='selelcted'" ?> value="indore">Indore</option>
					<option  <?php if($data['city']=="bhopal") echo "selected='selelcted'" ?> value="bhopal">Bhopal</option>
					<option <?php if($data['city']=="mumbai") echo "selected='selelcted'" ?> value="mumbai">Mumbai</option>
					<option <?php if($data['city']=="pune") echo "selected='selelcted'" ?> value="pune">Pune</option>
					
				</select>
				
			</div>
			<div class="form-group">
				<label>Gender : </label>
				Male <input <?php if($data['gender']=="male") echo "checked='checked'" ?> type="radio" name="gender" value="male" />
				Female <input type="radio"  <?php if($data['gender']=="female") echo "checked='checked'" ?> name="gender" value="female" />
				
			</div>
			<div class="form-group">
				<input type="submit" value="Update" class="btn btn-primary">
			</div>
		</form>
		</div>
	</div>
</div>

