<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}





include("header.php");
// print_r($_SESSION);
// die;
?>
		<div class="container-fluid back-new">
<div class="container content login-content">
	<div class="row back-new" >
		<div class="col-md-8 offset-md-2 new-content">
			<div class="col-md-9">
			<h5 class="user-back p-2 text-center">Post Your Property</h5>
			<div class="row">
				<div class="col-md-12 offset-md-2">
				<form action="save_property.php" method="post" enctype="multipart/form-data">
					<div class="form-group">		
						<label>Title</label>
						<input name="title" type="text" class="form-control">
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
							<option>Flat</option>
							<option>Row-House</option>
							<option>Banglow</option>
							<option>Plot</option>
						</select>
					</div>	
					<div class="form-group">		
						<label>Price</label>
						<div class="input-group">
							<input type="text" name="price" class="form-control"
							>
							<div class="input-group-append">
								<span class="input-group-text">&#8377;</span>
							</div>
						</div>
					</div>
					<div class="form-group">		
						<label>Area</label>
						<div class="input-group">
							<input type="text" name="area" class="form-control"
							>
							<div class="input-group-append">
								<span class="input-group-text">squar ft</span>
							</div>
						</div>
					</div>	
					<div class="form-group">		
						<label>Location</label>
						<select class="form-control" name="location">
							<option>Select</option>
							<option>Bangali Square</option>
							<option>Vijay Nagar</option>
							<option>M.G.Road</option>
							<option>Palaysia</option>
							<option>Patnipura</option>
							<option>Annpurna</option>
						</select>
					</div>
					<div class="form-group">		
						<label>Perpose</label>
						<select name="perpose" class="form-control">
							<option>Select</option>
							<option>For Rent</option>
							<option>For Sell</option>
							
						</select>
					</div>
					<div class="form-group">			
						<label>Complete Address</label>
						<textarea name="address" class="form-control"></textarea>
					</div>
					<div class="form-group">			
						<label>Details</label>
						<textarea name="details" class="form-control"></textarea>
					</div>
					<input type="submit" value="Post" class="btn btn-primary">

				</form>
				<br />
				<br />
				<br />
				</div>

			</div>
		</div>
		</div>
	</div>
</div>
</div>
<?php
include('footer.php');
?>