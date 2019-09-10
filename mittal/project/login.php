<?php
include("dbinfo.php");
include("header.php");
?>
<script type="text/javascript" src="js/auth.js"></script>
<div class="container content">
		<div class="row pt-2 mb-4">
			<div class="col-md-10 offset-md-1 pt-0 mt-0">
           	<h2 class="my-bg p-2 text-center">User Login</h2>
           
           	<div class="card bg-dark text-light">
           				<div class="card-header">
           					<h5>User Login,New User<a href="signup.html">  Clikehere </a></h5>
           				</div>
           				<div class="card-body">
           					<div class="form-group">
           						<label>Username</label>
           						<input type="text" class="form-control"placeholder="Enter Username" name="username" id="username">
           					</div>
           					<div class="form-group">
           						<label>Password</label>
           						<input type="password" class="form-control" placeholder="Enter Password" name="pass" id="password"> 
           					</div>
           				</div>
           				<div class="card-footer text-center">
                         <button class="btn btn-primary" id="submit">Login</button>
                         <button class="btn btn-primary">Signup</button>
           				</div>
           			</div>
              <p class="text-danger text-center" id="error-msg">
            </p>
           </div>
		</div>
	</div>
	     <?php
	     include("footer.php");
	     ?>

		