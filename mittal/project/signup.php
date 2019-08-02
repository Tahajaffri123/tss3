<?php
include("header.php");
?>
<div class="container content">
		<div class="row pt-0 mb-5">
			<div class="col-md-10 offset-md-1 pt-0 mt-0">
           	<h2 class="my-bg p-2 text-center">User Signup</h2>
            <form action="save.php" method="post">
           	<div class="card bg-dark text-light">
           				<div class="card-header">
           					<h5>Signup, Already Registered<a href="login.html">  Clikehere</a></h5>
           				</div>
           				<div class="card-body">
           					<div class="form-group">
           						<label>Full Name</label>
           						<input type="text" class="form-control" name="f-name"placeholder="Enter Full Name">
           					</div>
           					<div class="form-group">
           						<label>Username</label>
           						<input type="text" class="form-control" name="Username"placeholder="Enter Username"> 
           					</div>
           					<div class="form-group">
           						<label>Password</label>
           						<input type="Password" class="form-control" name="pass"placeholder="Enter Password">
           					</div>
           					<div class="form-group">
           						<label>Conform Password</label>
           						<input type="text" class="form-control" placeholder="Conform Password"> 
           					</div>
           					<div class="form-group">
           						<label>Contact No.</label>
           						<input type="text" class="form-control" name="contact"placeholder="Enter Contact">
           					</div>
           					<div class="form-group">
           						<label>Address</label>
           						<textarea placeholder="Address" name="add" class="form-control"></textarea>
           					</div>
           					 <div class="form-group">
                             <label>City</label><br />
                             <select class="form-control" name="city">

                             	<option>Select</option>
                             	<option>Khandwa</option>
                             	<option>Khargone</option>
                             	<option>Bhopal</option>
                             	<option>Indore</option>
                             	<option>Ujjain</option>
                             </select>
                         </div>
           					<div class="form-group">
           						<label>Gender</label><br />
           						<input type="radio" name="Gender">Mail
           						<input type="radio" name="Gender">Femail</div>
           				</div>

           				<div class="card-footer text-center">
                        
                         <button class="btn btn-primary">Signup</button>
           				</div>
           			</div>
              </form>
           </div>
		</div>
	</div>
		<?php
		include("footer.php");
		?>