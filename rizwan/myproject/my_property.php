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
<div class="container-fluid back-new">
<div class="container content login-content-1">
	<div class="row back-new" >
		<div class="col-md-12 new-content">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12 table-responsive">
					<h5 class="my-bg p-2 text-center profile">My Property</h5>
					<table class="table table-hover table-dark table-bordered">
						<tr>
							<th>S.No.</th>
							<th>Title</th>
							<th>Price</th>
							<th>Type</th>
							<th>Image</th>
							<th>Detail</th>
							<th>Edit</th>
							<th>Delete</th>
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
								<td><a href="detail.php?detail=<?php echo $data['id'];  ?>" class="btn btn-sm btn-secondary">Detail</a></td>	
								<td><a href="edit_property.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-info">Edit</a></td>
								<td><a href="delete_property.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
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