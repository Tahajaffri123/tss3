<?php
include("dbinfo.php");
if( ! isset($_SESSION['is_user_is_logged_in']))
{
	header("location:login.php");
}
include("header.php");
$a= $_SESSION['id'];
$que = "SELECT * FROM property WHERE id=$a";
$result = mysqli_query($con,$que);
$data = mysqli_fatch_assoc($result);
// print_r($data);
// die;
?>

<div class="col-md-9">
			<h5 class="my-bg p-2">My Profile</h5>
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header">Edit Your Profile</div>
						<div class="card-body">
           					<div class="form-group">
           						<label>Full Name</label>
           						<input value="<?php echo $data['full_name'] ?>" type="text" class="form-control" name="f_name"placeholder="Enter Full Name">
           					</div>
           					<div class="form-group">
           						<label>Username/Email-id</label>
           						<input disabled="disabled" value="<?php echo $data['username'] ?>" type="text" class="form-control" name="username"placeholder="Enter Username/Email-id"> 
           					</div>
           					<div class="form-group">
           						<label>Password</label>
           						<input type="Password" class="form-control" name="pass"placeholder="Enter Password">
           					</div>
           					<div class="form-group">
           						<label>Conform Password</label>
           						<input type="Password" class="form-control" placeholder="Conform Password"> 
           					</div>
           					<div class="form-group">
           						<label>Contact No.</label>
           						<input value="<?php echo $data['contact'] ?>" type="text" class="form-control" name="contact"placeholder="Enter Contact">
           					</div>
           					<div class="form-group">
           						<label>Address</label>
           						<textarea placeholder="Address" name="add" class="form-control"><?php echo $data['address'] ?></textarea>
           					</div>
           					 <div class="form-group">
                             <label>City</label><br />
                             <select class="form-control" name="city">

                             	<option>Select</option>
                             	<option <?php if($data['city']=='khandwa') echo "selected='selected'"; ?>>Khandwa</option>
                             	<option <?php if($data['city']=='Khargone') echo "selected='selected'"; ?>>Khargone</option>
                             	<option <?php if($data['city']=='Bhopal') echo "selected='selected'"; ?>>Bhopal</option>
                             	<option <?php if($data['city']=='Indore') echo "selected='selected'"; ?>>Indore</option>
                             	<option <?php if($data['city']=='Ujjain') echo "selected='selected'"; ?>>Ujjain</option>
                             </select>
                         </div>
           					<div class="form-group">
           						<label>Gender</label><br />
           						<input value="<?php if($data['gender==mail']) echo "checked = 'checked'"; ?>" type="radio" name="Gender">Mail
           						<input value="<?php if($data['gender==femail']) echo "checked = 'checked'"; ?>"  type="radio" name="Gender">Femail</div>
           				</div>

						<div class="card-footer">
							<butten type="Submit" class="btn btn-sm btn-info">Edit</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>  