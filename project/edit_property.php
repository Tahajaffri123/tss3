<?php
//258mittal852
//258mittal
include("db.php");
// Backdoor Protaction Code
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}

include("header.php");

$a = $_GET['id'];

$que = "SELECT * FROM property WHERE id = $a";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);

?>
		<div class="col-md-9">
			<h5 class="my-bg p-2">Edit Your Property</h5>
			<div class="row">
					
				<div class="col-md-8 offset-md-2">
				<form action="update_property.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $a; ?>">
					<div class="form-group">		
						<label>Title</label>
						<input name="title" value="<?php echo $data['title']; ?>" type="text" class="form-control">
					</div>
					<div class="form-group">		
						<label>Current Image</label>
						<img src="property_img/<?php echo $data['image'] ?>" height="100" width="100" />
					</div>
					<div class="form-group">		
						<label>Property Image</label>
						<input name="image" type="file" class="form-control">
						<p class="text-danger">
							<?php
							if(isset($_SESSION['msg']))
							{
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
							?>
						</p>
					</div>			
					<div class="form-group">		
						<label>Type</label>
						<select class="form-control" name="type">
							<option>Select</option>
							<option <?php if($data['type']=="Flat") echo "selected='selected'"; ?>>Flat</option>
							<option <?php if($data['type']=="Row-House") echo "selected='selected'"; ?>>Row-House</option>
							<option <?php if($data['type']=="Banglow") echo "selected='selected'"; ?>>Banglow</option>
							<option <?php if($data['type']=="Plot") echo "selected='selected'"; ?>>Plot</option>
						</select>
					</div>	
					<div class="form-group">		
						<label>Price</label>
						<div class="input-group">
							<input type="text" name="price" value="<?php echo $data['price']; ?>" class="form-control"
							>
							<div class="input-group-append">
								<span class="input-group-text">&#8377;</span>
							</div>
						</div>
					</div>
					<div class="form-group">		
						<label>Area</label>
						<div class="input-group">
							<input type="text" value="<?php echo $data['area'] ?>"  name="area" class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">squar ft</span>
							</div>
						</div>
					</div>	
					<div class="form-group">		
						<label>Location</label>
						<select class="form-control" name="location">
							<option>Select</option>
							<option <?php if($data['location']=="Bangali Square") echo "selected='selected'"; ?>>Bangali Square</option>
							<option <?php if($data['location']=="Vijay Nagar") echo "selected='selected'"; ?>>Vijay Nagar</option>
							<option <?php if($data['location']=="M.G.Road") echo "selected='selected'"; ?>>M.G.Road</option>
							<option <?php if($data['location']=="Palaysia") echo "selected='selected'"; ?>>Palaysia</option>
							<option <?php if($data['location']=="Patnipura") echo "selected='selected'"; ?>>Patnipura</option>
							<option <?php if($data['location']=="Annpurna") echo "selected='selected'"; ?>>Annpurna</option>
						</select>
					</div>
					<div class="form-group">		
						<label>Perpose</label>
						<select name="perpose" class="form-control">
							<option>Select</option>
							<option  <?php if($data['perpose']=="For Rent") echo "selected='selected'"; ?>>For Rent</option>
							<option  <?php if($data['perpose']=="For Sell") echo "selected='selected'"; ?>>For Sell</option>
							
						</select>
					</div>
					<div class="form-group">			
						<label>Complete Address</label>
						<textarea name="address" class="form-control"><?php echo $data['address'] ?></textarea>
					</div>
					<div class="form-group">			
						<label>Details</label>
						<textarea name="detail" class="form-control"><?php echo $data['detail'] ?></textarea>
					</div>
					<input type="submit" value="Edit Post" class="btn btn-secondary">
				</form>
				<br />
				<br />
				<br />
				</div>

			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>