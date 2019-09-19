<div class="container" style= "min-height: 600px; ">
	<h1>Login Page</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="<?php echo site_url("home/auth")?>" method="post" >
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="pass">
				</div>
				<input type="submit" value="Login" class="btn btn-info">
				<p class="text-center text-danger">
				   <?php
					echo $this->session->flashdata("msg");
					?> 
				</p>
			</form>
			</div>
		</div>
	</div>
</div>