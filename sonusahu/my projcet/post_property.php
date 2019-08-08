<?php
include("db.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}


include("header.php");
// print_r($_SESSION);


?> 
<div class="col-md-9">
	<h5 class="my-bg p-2">
	Post Your Proparty</h5>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form action="save_proparty.php" methed="Post">
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
                <label>Type</label>
                <select class="form-control" name="type">
                	<option>Select</option>
							<option>Flat</option>
							<option>Row-House</option>
							<option>Banglow</option>
							<option>Plot</option></select>
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
						<textarea name="detail" class="form-control"></textarea>
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

<?php
include("footer.php");















