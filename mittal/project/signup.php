<?php
include("header.php");
?>
<script type="text/javascript" src="js/val.js"></script>
<div class="container content">
		<div class="row pt-0 mb-5">
			<div class="col-md-10 offset-md-1 pt-0 mt-0">
           	<h2 class="my-bg p-2 text-center">User Signup</h2>
            <form action="" method="post">
           	<div class="card bg-dark text-light">
           				<div class="card-header">
           					<h5>Signup, Already Registered<a href="login.html">  Clikehere</a></h5>
           				</div>
           				<div class="card-body">
           					<div class="form-group">
           						<label>Full Name</label>
           						<input type="text" class="form-control" name="f_name"placeholder="Enter Full Name" id="f_name">
                      <p id="f_name_msg" class="text-danger error-msg"></p>
           					</div>
           					<div class="form-group">
           						<label>Username/Email-id</label>
           						<input type="text" class="form-control" name="username"placeholder="Enter Username/Email-id" id="username"> 
                        <p id="username_msg" class="text-danger error-msg"></p>
           					</div>
           					<div class="form-group">
           						<label>Password</label>
           						<input type="Password" class="form-control" name="pass"placeholder="Enter Password" id="Pass">
                        <p id="pass_msg" class="text-danger error-msg"></p>
           					</div>
           					<div class="form-group">
           						<label>Conform Password</label>
           						<input type="Password" class="form-control" placeholder="Conform Password" id="con_pass"> 
                        <p id="con_msg" class="text-danger error-msg"></p>
           					</div>
           					<div class="form-group">
           						<label>Contact No.</label>
           						<input type="text" class="form-control" name="contact"placeholder="Enter Contact" id="contact">
                        <p id="contact_msg" class="text-danger error-msg"></p>
           					</div>
           					<div class="form-group">
           						<label>Address</label>
           						<textarea placeholder="Address" name="add" class="form-control" id="add"></textarea>
                        <p id="add_msg" class="text-danger error-msg"></p>
           					</div>
           					 <div class="form-group">
                             <label>City</label><br />
                             <select class="form-control" name="city" id="city">

                             	<option>Select</option>
                             	<option>Khandwa</option>
                             	<option>Khargone</option>
                             	<option>Bhopal</option>
                             	<option>Indore</option>
                             	<option>Ujjain</option>
                             </select>
                           <p id="city_msg" class="text-danger error-msg"></p>
                         </div>
           					<div class="form-group">
           						<label>Gender</label><br />
           						<input type="radio" name="gender" value="male" id="mail">Mail
           						<input type="radio" name="gender" value="femail" id="femail">Femail</div>
                        <p id="gender_msg" class="text-danger error-msg"></p>
           				</div>

           				<div class="card-footer text-center">
                        
                         <button class="btn btn-primary" id="submit_btn">Signup</button>
           				</div>
           			</div>
              </form>
           </div>
		</div>
	</div>
		<?php
		include("footer.php");
		?>