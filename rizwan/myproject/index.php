

<?php
include("db.php");
include('header.php');
$que = "SELECT * FROM property ORDER BY time desc";
if(isset($_GET['type']))
{
	$a = $_GET['type'];
	if($a=="rent")
	{
		$que = "SELECT * FROM property WHERE perpose = 'For Rent' ORDER BY time desc";

	}
	if($a=="buy")
	{

		$que = "SELECT * FROM property WHERE perpose = 'For Sell' ORDER BY time desc";
	}
}
$result = mysqli_query($con, $que);
// print_r($_SESSION);
// die;
?>
<div class="jumbotron jumbotron-fluid slider">
	
		<div class="col-md-6 offset-md-3">
			<div class="form-group pt-3 Search-bar">
				<div class="input-group">
					<input type="text" placeholder="Search Property" class="form-control">
					<div class="input-group-append">
							<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
				</div>

			</div>
		</div>
	
</div>

<div class="container content">
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group">
				<li class="list-group-item">
					<a href="index.php?type=rent" class="list-group-link">For Rent</a>
				</li>
				<li class="list-group-item">
					<a href="index.php?type=buy" class="list-group-link">For Buy</a>
				</li>

			</ul>
		</div>
		<div class="col-md-9">
			<h5 class="my-bg p-2">Latest Property</h5>
		<?php
		while($data=mysqli_fetch_assoc($result))
		{
		?>

			<div class="card mb-3">
				
				<div class="card-body">
					<div class="row">
						<div class="col-md-5">
							<img src="property_img/<?php echo $data['image']; ?>" height="150" class="img-thumbnail">
						</div>
						<div class="col-md-7">
							<h4> <?echo $data=['title']; ?></h4>
							<p><strong>Price : </strong><?php echo $data['price'];?></p>
							<p><strong>Location : </strong><?php echo $data['location'];?></p>
							<p>Type : <b class="badge badge-pill badge-primary"><?php echo $data['perpose']; ?></b>
							</p>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<a href="property_details.php?details=<?php echo $data['id'];  ?>" class="btn btn-dark btn-sm d-block float-right">Detail</a>
				</div>
			</div>

		<?php
		}
		?>	

			</div>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>