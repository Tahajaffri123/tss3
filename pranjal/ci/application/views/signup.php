<div class="container" style="min-height: 600px;">
	<h2>SignUp Page</h2>

	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="" method="post">
				<div class="form-group">
					<label><b>Full Name</b></label>
					<input type="text" name="f_name" class="form-control" value="<?php echo set_value('f_name');?>">
					<div class="text-danger">
						<?php echo form_error("f_name");?>
					</div>
				</div>
				<div class="form-group">
					<label><b> E-mail</b></label>
					<input type="text" name="mail" class="form-control" value="<?php echo set_value('mail');?>">
					<div class="text-danger">
						<?php echo form_error("mail");?>
					</div>
				</div>
				<div class="form-group">
					<label><b>Password</b></label>	
					<input type="Password" name="pass" class="form-control" value="<?php echo set_value('pass');?>">
					<div class="text-danger">
					<?php echo form_error("pass");?>
					</div>
				</div>
				<div class="form-group">
					<label><b>Re-password</b></label>
					<input type="password" name="re_pass" class="form-control" value="<?php echo set_value('re_pass');?>">
					<div class="text-danger">
					<?php echo form_error("re_pass");?>
					</div>
				</div>
				<div class="form-group">
					<label><b>Contact</b></label>
					<input type="text" name="cont" class="form-control" value="<?php echo set_value('cont');?>">
					<div class="text-danger">
						<?php echo form_error("cont");?>
					</div>
				</div>
				<div class="form-group">
					<label><b>Address</b></label>
					<textarea class="form-control" name="add"><?php echo set_value('add');?></textarea>
					<div class="text-danger">
						<?php echo form_error("add");?>
					</div>
				</div>
				<div class="form-group">
					<label><b>City</b></label>
					<select class="form-group" name="city">
						<option value="">Select</option>
						<option <?php echo set_select("city", "indore")?> value="indore">Indore</option>
						<option <?php echo set_select("city",  "bhopal")?> value="bhopal">Bhopal</option>
						<option <?php echo set_select("city", "khargone")?> value="khargone">Khargone</option>
						<option <?php echo set_select("city", "pune")?>value="pune">Pune</option>
					</select>
					<div class="text-danger">
						<?php echo form_error("city");?>
					</div>
				</div>
				<div class="form-group">
					<label><b>Gender : </b></label>
					Male <input type="radio" <?php echo set_radio("gender", "male");?> name="gender" value="male" />
					Female <input type="radio" <?php echo set_radio("gender", "female")?> name="gender" value="female" />
					<div class="text-danger">
						<?php echo form_error("gender");?>
					</div>
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
