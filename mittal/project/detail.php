<?php
include("dbinfo.php");
if( ! isset($_SESSION["is_user_logged_in"]))
{
	header("location:login.php");
} 
include("header.php");
$x = $_GET['detail'];
$que = "SELECT * FROM property WHERE id = $x ";
$result = mysqli_query($con, $que); 
$data = mysqli_fetch_assoc($result);
 ?>
 <div class="col-md-9 offset-md-2">
			<h5 class="my-bg p-2 text-center">My Property</h5>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-hover table-dark table-bordered">
						<tr>
							<td>Title</td>
							<td><?php echo $data['title']; ?></td>
						</tr>
						<tr>
							<td>Type</td>
							<td><?php echo $data['type']; ?></td>
						</tr>
						<tr>
							<td>Price</td>
							<td><?php echo $data['price']; ?></td>
						</tr>
                        <tr>
							<td>Area</td>
							<td><?php echo $data['area']; ?></td>
						</tr>
                        <tr>
							<td>Location</td>
							<td><?php echo $data['location']; ?></td>
						</tr>
						<tr>
							<td>Perpose</td>
							<td><?php echo $data['perpose']; ?></td>
						</tr>
                       <tr>
							<td>Address</td>
							<td><?php echo $data['address']; ?></td>
						</tr>
                        <tr>
							<td>Detail</td>
							<td><?php echo $data['detail']; ?></td>
						</tr>
              </table>
          </div>
      </div>
  </div>
  <?php
  include("footer.php");
  ?>
