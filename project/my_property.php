<?php
include("db.php");
// Backdoor Protaction Code
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");

$id = $_SESSION['id'];
$que = "SELECT * FROM property WHERE user_id = $id";
$result = mysqli_query($con, $que);


// print_r($_SESSION);
?>
		<div class="col-md-9">
			<h5 class="my-bg p-2">My Property</h5>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<table class="table table-hover table-dark table-bordered">
						<tr>
							<th>S.No.</th>
							<th>Title</th>
							<th>Price</th>
							<th>Type</th>
							<th>Image</th>
						</tr>
						<?php
						$n=1;
						while($data = mysqli_fetch_assoc($result))
						{ ?>
							<tr>
								<td><?php echo $n; ?></td>
								<td><?php echo $data['title'];?></td>
								<td><?php echo $data['price'];?></td>
								<td><?php echo $data['type'];?></td>
								<td><img src="property_img/<?php echo $data['image'] ?>" height="80" width="80">
						<?php 
						$n++;
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("footer.php");
?>