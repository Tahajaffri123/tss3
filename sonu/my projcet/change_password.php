<?php
include("db.php");
include("header.php");
?>
         <div class="col-md-9">
         	<h5 class="my-bd p-2">
         	Update Password</h5>
         	<div class="row">
         		<div class="col-md-8 offset-md-2">
         			<form action="Update_password.php" method="post">
         				<div class="card md-4">
         					<div class="card-header">
         						<h3>Change Your Password</h3>
         					</div>
         					<div class="card-body">

         						<div class="form-group">
         							<label>Current password</label>
         							<input type="password" name="c_pass"placeholder="password" class="form-control">
         						</div>

         						<div class="form-group">
         							<label>New password</label>
         							<input type="password" name="n_pass"placeholder="password" class="form-control">
         						</div>
         						<div class="form-group">
         							<label>Confirm New password</label>
         							<input type="password" name="cn_pass"placeholder="password" class="form-control">
         						</div>
         						<p class="text-danger text-center">
         							<?php
         							if(isset($_SESSION['msg']))
         							{
         								echo $_SESSION['msg'];
         								unset($_SESSION['msg']);
         							}
         							?>
         						</p>
         					</div>
         					<div class="card-footer">
         						<button type="submit" class="btn btn-dark">Updata</button>
         					</div>
         				</div>
         				
         			</form>
         		</div>
         	</div>
         </div>
     </div>
     <?php
     include("footer.php");
     ?>
