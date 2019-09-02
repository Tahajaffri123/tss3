<?php
	include("db.php");
	// print_r($_SESSION);die;
	//Backdoor Protaction Code
	if(! isset($_SESSION['is_user_logged_in']))
	{
		header("location:login.php");
	}
	include("header.php");

	$id = $_SESSION['id'];
	$que = "SELECT * FROM property WHERE user_id = $id";
	
	$result = mysqli_query($con, $que);
	//print_r($_SESSION);
?>
	<div class="col-md-10 offset-1">
		<h5 class="my-bg p-2 text-center">My Property</h5>
		<div class="row">
			<div class="col-md-10 offset-1 ">
				<table class="table table-hover table-dark table-bordered">
					<tr>
						<th>S.No.</th>
						<th>Title</th>
						<th>Price</th>
						<th>Type</th>
						<th>image</th>
						<th>Detail</th>
						<th>Edit</th>  
						<th>Delete</th>  
					</tr>
					<?php
					$n=1;
					while($data = mysqli_fetch_assoc($result))
					{
					?>
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $data['title'];?></td>
						<td><?php echo $data['price'];?></td>
						<td><?php echo $data['type'];?></td>
						<td><img src="property_img/<?php echo $data['image']?>" height="120" width="200"><td><a href="detail.php?detail=<?php echo $data['id'];?>" class="btn btn-secondary">Detail</a></td>
						<td><a href="edit_property.php?id=<?php echo $data['id'];?>" class="btn btn-info">Edit</a></td>
						<td><a href="delete_property.php?id=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a></td>
					</td> 
					</tr>
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


<br />
<?php
include("footer.php");
?>



