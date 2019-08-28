<?php
include("dbinfo.php");
// print_r($_SESSION);
// die;
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");


$a= $_SESSION['id'];

 $que = "SELECT * FROM register WHERE id=$a";

$result = mysqli_query($con,$que);
$data = mysqli_fetch_assoc($result);
// print_r($data);
// die;
?>

<div class="col-md-8 offset-md-2">
      <h4 class="my-bg p-2 text-center">Edit Your Profile</h4>
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card bg-dark text-light">
            <div class="card-header text-center"><h5>Edit Your Profile</h5></div>
            <div class="card-body">
              <form action="update_profile.php" method="post">
           					<div class="form-group">
           						<label>Full Name</label>
           						<input value="<?php echo $data['full_name'] ?>" type="text" class="form-control" name="f_name"placeholder="Enter Full Name">
           					</div>
           					<div class="form-group">
           						<label>Username/Email-id</label>
           						<input disabled="disabled" value="<?php echo $data['username'] ?>" type="text" class="form-control" name="username"placeholder="Enter Username/Email-id"> 
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
                      <input  type="radio" <?php if($data['gender']=="male") echo "checked = 'checked'"; ?>  name="gender" value="male" />Male
                      <input  type="radio" <?php if($data['gender']=="female") echo "checked = 'checked'"; ?>  name="gender" value="female" />Female
                    </div>
           				</div>
						<div class="card-footer text-center">
							<button type="submit" class="btn btn-info">Update</button>
                
						</div>
					</div>
       </form>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>  