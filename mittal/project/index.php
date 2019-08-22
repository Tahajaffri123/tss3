<?php
include("dbinfo.php");
include("header.php");
 $que = "SELECT * FROM property ORDER BY date desc";
 if (isset($_GET['type']))
 {
 	$a=$_GET['type'];
 	if($a=="sell")
 	{
 		 $que = "SELECT * FROM property WHERE perpose = 'For Sell' ORDER BY date desc"; 
 		 
 	}
 	if($a=="rent")
 	{
 		$que = "SELECT * FROM property WHERE perpose = 'For Rent' ORDER BY date desc";
 	}
 }


 
$result= mysqli_query($con,$que);
?>
<div class="container content">
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group">
					<li class="list-group-item">
						<a class="list-gruop-link" href="index.php?type=rent ">For Rent</a>
					</li>
					<li class="list-group-item">
						<a class="list-group-link" href="index.php?type=sell">For By</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<h5 class="my-bg p-2">Latest Property</h5>
				<?php
				while ($data  = mysqli_fetch_assoc($result)) 
				{
					// print_r($data);
				?>
				<div class="card md-3">
					<div class="card-body">
						<div class="row">
							<div class="col-md-5">
								<img src="property_img/<?php echo $data['image']; ?>" height="150" class="img-thamnail">
							</div>
							<div class="col-md-7">
								<h4></h4>
								<p><strong> Price :</strong><?php echo $data['price'] ?></p>
								<p><strong> Location :</strong><?php echo $data['location'] ?></p>
								<p>Type : <b class="badge badge-pill badge-primary"><?php echo $data['perpose']; ?></b></p>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button class="btn btn-dark d-block float-right">Detail</button>
					</div>
				</div>
				<?php
			}
			?>
			
			</div>
		</div>
	</div>
		<?php
		include("footer.php");
		?>





		