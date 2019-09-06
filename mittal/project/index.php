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

 if(isset($_GET['q']))
 {
 	$q = $_GET['q'];
 	$q_upper = strtoupper($q);
 	$q_lower = strtolower($q);

 	$que = "SELECT * FROM property WHERE location LIKE '%$q_upper%' OR location LIKE '%$q_lower%' OR address LIKE '%$q_upper%' OR address LIKE '%$q_lower%' OR title LIKE '%$q_upper%' OR title LIKE '%$q_lower%'";
 }


 
$result = mysqli_query($con,$que);
?>
<div class="container content">
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group">
					<li class="list-group-item">
						<a class="list-gruop-link" href="index.php?type=rent ">For Rent</a>
					</li>
					<li class="list-group-item">
						<a class="list-group-link" href="index.php?type=sell">For Sell</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<h5 class="my-bg p-2 text-center">Latest Property</h5>
				<?php
				while ($data  = mysqli_fetch_assoc($result)) 
				{
					// print_r($data);
				?>
				<div class="card md-3">
					<div class="card-body">
						<div class="row">
							<div class="col-md-5">
								<img src="property_img/<?php echo $data['image']; ?>" height="150" width="200" >
							</div>
							<div class="col-md-6 offset-1">
								<h4></h4>
								<p><strong> Price :</strong><?php echo $data['price'] ?></p>
								<p><strong> Location :</strong><?php echo $data['location'] ?></p>
								<p>Type : <b class="badge badge-pill badge-primary"><?php echo $data['perpose']; ?></b></p>
							</div>
						</div>
					</div>
					<div class="card-footer text-center">
						<a href="detail_home.php?detail=<?php echo $data['id']; ?>" class="btn btn-primary">Detail</a>
					
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





		