
<div class="container" style="min-height: 600px;">
	<h2>Registration Page</h2>
	<div class="row">
		<?php
		// echo validation_errors();
		?>
		<div class="col-md-6 offset-md-3">
		<form action="" method="post">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="f_name" class="form-control" value="<?php echo set_value('f_name'); ?>" />
				<div class="text-danger">
					<?php echo form_error("f_name");?>
						
				</div>

			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo set_value('email');?>" />
				<div class="text-danger">
					<?php echo form_error("email");?>
						
				</div>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="Password" name="pass" class="form-control" value="<?php echo set_value('pass');?>" />
				<div class="text-danger">
					<?php echo form_error("pass");?>
						
				</div>
			</div>
			<div class="form-group">
				<label>Re-Password</label>
				<input type="Password" name="re_pass" class="form-control" value="<?php echo set_value('re_pass');?>" />
				<div class="text-danger">
					<?php echo form_error("re_pass");?>
						
				</div>
			</div>
			<div class="form-group">
				<label>Contact</label>
				<input type="text" name="contact" class="form-control" value="<?php echo set_value('contact') ?>" />
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

