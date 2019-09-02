<?php
include("db.php");
include("header.php");
// die;
	$x = $_GET['detail'];

	$que = "SELECT * FROM property WHERE id= $x";
	$result = mysqli_query($con, $que);
	$data = mysqli_fetch_assoc($result);
?>


  <div class="col-md-8 offset-2">
			<h5 class="my-bg p-2 text-center">Property Detail</h5>
			<div class="row">
				<div class="col-9 offset-1">
					<table class="table table-dark table-bordered table-hover">
						<tr>
							<td>Title</td>
							<td><?php echo $data['title']; ?></td>
						</tr>
						<tr>
							<td>Type</td>
							<td><?php echo $data['type']; ?></td>
						</tr>
						<tr>
							<td>Area</td>
							<td><?php echo $data['area']; ?></td>
						</tr>
						<tr>
							<td>Price</td>
							<td><?php echo $data['price']; ?></td>
						</tr>
						
						<tr>
							<td>Perpose</td>
							<td><?php echo $data['perpose']; ?></td>
						</tr>
						<tr>
							<td colspan="2" class="text-center">
								<button data-toggle="collapse" data-target="#demo" type="button" class="btn btn-danger">More Detail</button>
								<div id="demo" class="collapse">
									<?php
									if( isset($_SESSION['is_user_logged_in']))
									{
									?>
									
									<tr id="demo" class="collapse">
										<td>address</td>
										<td> <?php echo $data['address'];?></td>
									</tr>
									<tr id="demo" class="collapse">
										<td>detail</td>
										<td> <?php echo $data['detail'];?></td>
									</tr>
					
									<?php
									}	
									else
									{
									  echo $_SESSION['msg']= "Pleause Ragister Your Account"?>
									  <a href="signup.php" class="bg-danger text-light">Registration</a>

									  <?php
									}
									?>
								</div>
						</table>
				</div>
			</div>
		</div>
	</div>
</div>
	<br />
 <?php 

 include("footer.php");
?>