<div class="container-fluid" style="min-height: 600px; background-color: #abc123">
	<h2>Registration Page</h2>
	<div class="row">
		<!-- <?php
		// echo validation_errors();
		?> -->
		<div class="col-md-6 offset-md-3" style="background-color:#123; color: yellow ">
		<form action="" method="post">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="full_name" class="form-control" value="<?php echo set_value('full_name'); ?>" />
				<div class="text-danger">
					<?php echo form_error("full_name");?>
						
				</div>

			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="username" class="form-control" value="<?php echo set_value('username');?>">
				<div class="text-danger">
					<?php echo form_error("username");?>
						
				</div>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="Password" name="password" class="form-control" value="<?php echo set_value('password');?>">
				<div class="text-danger">
					<?php echo form_error("password");?>
						
				</div>
			</div>
			<div class="form-group">
				<label>Re-Password</label>
				<input type="Password" name="re_pass" class="form-control" value="<?php echo set_value('re_pass');?>">
				<div class="text-danger">
					<?php echo form_error("re_pass");?>
						
				</div>
			</div>
			<div class="form-group">
				<label>Contact</label>
				<input type="text" name="contact" class="form-control" value="<?php echo set_value('contact') ?>">
				<div class="text-danger">
					<?php echo form_error("contact");?>
						
				</div>
			</div>
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control" name="add"><?php echo set_value('add') ?></textarea>
				<div class="text-danger">
					<?php echo form_error("add");?>
						
				</div>
			</div>
			<div class="form-group">
				<label>City</label>
				<select class="form-control" name="city">
					<option value="">Select</option>
					<option <?php echo set_select("city", "indore") ?> value="indore">Indore</option>
					<option <?php echo set_select("city", "bhopal") ?> value="bhopal">Bhopal</option>
					<option <?php echo set_select("city", "mumbai") ?> value="mumbai">Mumbai</option>
					<option <?php echo set_select("city", "pune") ?> value="pune">Pune</option>
					
				</select>
				<div class="text-danger">
					<?php echo form_error("city");?>
						
				</div>
			</div>
			<div class="form-group">
				<label>Gender : </label>
				Male <input type="radio" <?php echo set_radio("gender", "male"); ?> name="gender" value="male" />
				Female <input type="radio" <?php echo set_radio("gender", "female"); ?> name="gender" value="female" />
				<div class="text-danger">
					<?php echo form_error("gender");?>
						
				</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Sign-Up" class="btn btn-primary">
			</div>
		</form>
		</div>
	</div>
</div>
