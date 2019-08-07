<?php
include("header.php");
?>
<div class="container content">
		<div class="row pt-2 mb-4">
			<div class="col-md-10 offset-md-1 pt-0 mt-0">
           	<h2 class="my-bg p-2 text-center">User Login</h2>
            <form action="auth.php" method="post">
           	<div class="card bg-dark text-light">
           				<div class="card-header">
           					<h5>User Login,New User<a href="signup.html">  Clikehere </a></h5>
           				</div>
           				<div class="card-body">
           					<div class="form-group">
           						<label>Username</label>
           						<input type="text" class="form-control"placeholder="Enter Username" name="Username">
           					</div>
           					<div class="form-group">
           						<label>Password</label>
           						<input type="password" class="form-control" placeholder="Enter Password" name="Pass"> 
           					</div>
           				</div>
           				<div class="card-footer text-center">
                         <button class="btn btn-primary">Login</button>
                         <button class="btn btn-primary">Signup</button>
           				</div>
           			</div>
              </form>
              <p class="text-danger text-center">
              <?php
              if(isset($_SESSION['msg']))
              {
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
              }  
              ?>
            </p>
           </div>
		</div>
	</div>
	     <?php
	     include("footer.php");
	     ?>

		