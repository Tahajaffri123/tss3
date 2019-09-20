<div class="container" style="min-height: 600px;">
	<h2><center>Update Profile</center></h2>
<div class="row">
	<div class="col-md-6 offset-md-3">
		<?php
		$data = $result->row_array(); 
		?>
		<form action="<?php echo site_url("user/update") ?>" method="post">
			
	<div class="form-gruop">
		<label>Full Name</label>
		<input type="text" value="<?php echo $data['full_name']; ?>" name="full_name" class="form-control">
	</div>
	<div class="form-gruop">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $data['username'] ?>" disabled="disabled" class="form-control">
	</div>
	<div class="form-gruop">
		<label>Contact</label>
		<input type="text" name="contact" value="<?php echo $data['contact'] ?>" class="form-control">
	</div>
	<div class="form-gruop">
		<label>Address</label>
		<textarea name="address" class="form-control"><?php echo 
		$data['address']?></textarea>
	</div>
	<div class="form-gruop">
		<label>City</label>
		<select class="form-control">
			<option value="">Select</option>
			<option <?php if($data['city']=="indore") echo "selected=selected"?> value="Indore">Indore</option>
			<option <?php if($data['city']=="khandwa") echo "selected=selected"?> value="khandwa">Khandwa</option>
			<option <?php if($data['city']=="Mumbai") echo "selected=selected"?> value="Mumbai">Mumbai</option>
			<option <?php if($data['city']=="Pune") echo "selected=selected"?> value="pune">Pune</option>
		</select>		
	</div>
	<br/>
	<div class="form-gruop">
		<label>Gender :</label>
		<input <?php if($data['gender']=="male") echo "checked = checked"?> type="radio" name="gender" value="male">Male
		<input <?php if($data['gender']=="female") echo "checked = checked"?> type="radio" name="gender" value="female">Female
	</div>
	<div class="form-gruop">
         <input type="submit" value="Update" class="btn btn-info">	</div>
		</form>
</div>
	</div>
</div>