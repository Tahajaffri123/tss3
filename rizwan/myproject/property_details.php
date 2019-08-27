<?php
include("db.php");
include("header.php");

$x = $_GET['details'];

$que="SELECT * FROM Property WHERE id=$x";
$result = mysqli_query($con, $que);
$data = mysqli_fetch_assoc($result);
// print_r($data);

?>
<div class="container-fluid back-new">
<div class="container content login-content-1">
	<div class="row back-new" >
		<div class="col-md-12 new-content">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-10 col-sm-10 col-10 offset-1 table-responsive text-center">
					<h5 class="my-bg p-2 text-center profile">Property</h5>
					<table class="table table-hover table-dark table-bordered">
							<tr class="my-details">
								<td>Title</td>
								<td><?php echo $data['title'];?></td>
							</tr>
							<tr class="my-details">
								<td>Property Image</td>
								<td> <img src="property_img/<?php echo $data['image'];?>"> </td>
							</tr>
							<tr class="my-details">
								<td>Type</td>
								<td><?php echo $data['type'];?></td>
							</tr>
							<tr class="my-details">
								<td>Price</td>
								<td><?php echo $data['price'];?></td>
							</tr>
							<tr class="my-details">
								<td>Area</td>
								<td><?php echo $data['area'];?></td>
							</tr>
							<tr class="my-details">
								<td>perpose</td>
								<td><?php echo $data['perpose'];?></td>
						    </tr>
						    <tr class="my-details">
						    	<td  colspan="2"><button class="btn-primary" data-toggle="collapse" data-target="#demo">More Dtails</button></td>
						    </tr>
						    <div id="demo" class="collapse my-details">
						    	<?php
						    	if(isset($_SESSION['is_user_logged_in']))
						    	{
						    	?>
							    	<tr id="demo" class="collapse my-details">
											<td>Location</td>
											<td><?php echo $data['location'];?></td>
								    	</tr>
								    	<tr id="demo" class="collapse my-details">
											<td>Complete Address</td>
											<td><?php echo $data['address'];?></td>
								    	</tr>
								    	<tr id="demo" class="collapse my-details">
											<td>Details</td>
											<td><?php echo $data['details'];?></td>
								    	</tr>
							 
								<?php
								}
								  else 
								  { 
								  	echo $_SESSION['msg']="user not loged in ";  
								   unset($_SESSION['msg']);
								  }	
								  ?>
						 </div>  
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
include("footer.php");
?>