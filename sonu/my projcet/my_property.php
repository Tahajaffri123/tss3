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
$result = mysqli_query($conn, $que);

?>
<div class="col-md-9 col-sm-9">
	<h5 class="my-bg p-2"><center>my property</center></h5>
	<div class="row">
		<div class="col-md-10 col-10 offset-md-1 table-responsive">
			<table class="table table-hover table-dark table-bordered">
				<tr>
					<th>S.No</th>
					<th>Title</th>
					<th>price</th>
					<th>type</th>
					<th>image</th>
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