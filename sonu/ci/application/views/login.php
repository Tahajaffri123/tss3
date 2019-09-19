<div class="container-fluid" style="min-height: 600px; background-color:#abc123">
	<h2><center>Login Page</center></h2>
      <div class="row">
      	<div class="col-md-5 offset-md-4" style="background-color: #123; color: yellow;">
      		<form action="<?php echo site_url('home/auth') ?>" method="post">
                  <div class="form-group">
                        <label>Username/Email</label>
                        <input type="text" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pass">
                  </div>
                  <div class="form-group">
                        
                        <input type="submit" class="btn btn-primary" value="Login">
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