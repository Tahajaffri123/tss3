<div class="container" style="min-height: 600px;">
	<h1>Registration Page</h1>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="" method="post">
				<div class="form-group">
		             <label>Full Name</label>
		             <input type="text" name="full_name" value="<?php echo set_value("full_name"); ?>" class="form-control" />		
		         </div>
		         <div class="text-danger">
		          <?php echo form_error("full_name");	?>
		         </div>
		         <div class="form-group">
		         	<label>Email</label>
		         	<input type="text" name="username" value="<?php echo set_value("username");?>" class="form-control" />
		         </div>
		         	<div class="text-danger">
		         		<?php echo form_error("username");?>
		         	</div>
		         	 <div class="form-group">
		         	<label>Password</label>
		         	<input type="password" name="password" value="<?php echo set_value("password");?>" class="form-control" />
		         </div>
		         	<div class="text-danger">
		         		<?php echo form_error("password");?>
		         	</div>
		         	 <div class="form-group">
		         	<label>Re-Password</label>
		         	<input type="password" name="re-pass" value="<?php echo set_value("re-pass");?>" class="form-control" />
		         </div>
		         	<div class="text-danger">
		         		<?php echo form_error("re-pass");?>
		         	</div>
		         			         	 <div class="form-group">
		         	<label>Contact</label>
		         	<input type="text" name="contact" value="<?php echo set_value("contact");?>" class="form-control" />
		         </div>
		         	<div class="text-danger">
		         		<?php echo form_error("contact");?>
		         	</div>
		         	<div class="form-group">
		         	<label>Address</label>
		         	<textarea class="form-control" name="add"><?php echo set_value("add") ?></textarea>
		         </div>
		         	<div class="text-danger">
		         		<?php echo form_error("add");?>
		         	</div>
		         	<div class="form-group">
		         		<label>City</label>
		         		<select class="form-control" name="city">
		         			<option value="">Select</option>
		         			<option <?php echo set_select("city","indore")?> value="indore">Indore</option>
		         			<option <?php echo set_select("city","ujjain")?> value="ujjain">Ujjain</option>
		         			<option <?php echo set_select("city","khandwa")?> value="khandwa">Khandwa</option>

		         		</select>
		         	</div>
		         	<div class="text-danger">
                       <?php echo form_error("city");?>		         		
		         	</div>
		         	<br />
		         	<div class="form-group">
		         		<label>Gender</label>
		         		<input type="radio"<?php echo set_radio("gender","male")?> name="gender" value="male">Male
		         		<input type="radio"<?php echo set_radio("gender","female")?> name="gender" value="female">Female
		         	</div>
		         	<div class="text-danger"> 		         		<?php echo form_error("gender");?>
		         	</div>
		         	<input type="submit" value="submit" class="btn btn-info">
		         </div>
		     </div>
		 </div>
			</form>
			<br />
		