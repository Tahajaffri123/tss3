<?php
include("db.php");
include("header.php");
$que = "SELECT * FROM property ORDER BY date desc";
$result = mysqli_query($con, $que);
?>
		<div class="col-md-9">
			<h5 class="my-bg p-2">New Property</h5>

		<?php
		while($data=mysqli_fetch_assoc($result))
		{
		?>


		<div class="card mb-3">
				
				<div class="card-body">
					<div class="row">
						<div class="col-md-5">
							<img src="property_img/<?php echo $data['image'] ?>" height="150" class="img-thumbnail">
						</div>
						<div class="col-md-7">
							<h4><?php echo $data['title']; ?></h4>
							<p><strong>Price : </strong><?php echo $data['price'] ?></p>
							<p><strong>Location : </strong><?php echo $data['location'] ?></p>
							<p>Type : <b class="badge badge-pill badge-primary"><?php echo $data['perpose']; ?></b></p>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-dark btn-sm d-block float-right">Detail</button>
				</div>
		</div>


		<?php
		}
		?>	







		</div>
	</div>
</div>

<?php
include("footer.php")

?>