<div class="container" style="min-height: 600px;">
	<h1>Login Page</h1>
	<div class="row">
		<div class="col-md-5 offset-3">
			<form action="<?php echo site_url('home/auth')?>" method="post">
				<div class="form-group">
					<label><b>UserName</b></label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label><b>Password</b></label>
					<input type="password" name="pass" class="form-control">
				</div>
				<div class="form-group text-center">
					<input type="submit" value="login" class="btn btn-primary">
				</div>
				<p class="text-center text-danger">
					<?php 
					echo $this->session->flashdata("msg");
					?>
				</p>
			</form>
		</div>
	</div>
</div>