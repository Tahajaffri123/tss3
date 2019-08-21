<?php
include("dbinfo.php");
if( ! isset($_SESSION["is_user_logged_in"]))
{
	header("location:login.php");
} 
include("header.php");
$id = $_SESSION['id'];
$que = "SELECT * FROM property WHERE user_id = $id";
$result = mysqli_query($con, $que); 
 ?>
 <div class="col-md-8 offset-md-2">
			<h5 class="my-bg p-2 text-center">My Property</h5>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<table class="table table-hover table-dark table-bordered">
						<tr>
							<td>S.No.</td>
							<td>Title</td>
							<td>Type</td>
							<td>Price</td>
                            <td>Image</td>
						</tr>
						<?php
						$n=1;
						while ($data = mysqli_fetch_assoc($result)) {
							?>
							<tr>
								<td><?php echo $n;?></td>
								<td><?php echo $data['title'];?></td>
								<td><?php echo $data['type'];?></td>	
								<td><?php echo $data['price'];?></td>	
								<td><img src="property_img/<?php echo $data['image']?>" height=100px width=100px></td>
							</tr>
					    <?php
						}
						$n++;
						?>
              </table>
          </div>
      </div>
  </div>
  <?php
  include("footer.php");
  ?>
