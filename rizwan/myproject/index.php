

<?php
include("db.php");
include('header.php');
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
					<a href="#" class="list-group-link">For Rent</a>
				</li>
				<li class="list-group-item">
					<a href="#" class="list-group-link">For Buy</a>
				</li>

			</ul>
		</div>
		<div class="col-md-9">
			<h5 class="my-bg p-2">Latest Property</h5>
			<div class="card mb-3">
				
				<div class="card-body">
					<div class="row">
						<div class="col-md-5">
							<img src="project-image/1.jpg" height="150" class="img-thumbnail">
						</div>
						<div class="col-md-7">
							<h4>New Row House for Sell</h4>
							<p><strong>Price : </strong>100000.00</p>
							<p><strong>Location : </strong>Bangali Square</p>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-dark btn-sm d-block float-right">Detail</button>
				</div>
			</div>


			<div class="card mb-3">
				
				<div class="card-body">
					<div class="row">
						<div class="col-md-5">
							<img src="project-image/1.jpg" height="150" class="img-thumbnail">
						</div>
						<div class="col-md-7">
							<h4>New Row House for Sell</h4>
							<p><strong>Price : </strong>100000.00</p>
							<p><strong>Location : </strong>Bangali Square</p>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-dark btn-sm d-block float-right">Detail</button>
				</div>
			</div>
			<div class="card mb-3">
				
				<div class="card-body">
					<div class="row">
						<div class="col-md-5">
							<img src="project-image/1.jpg" height="150" class="img-thumbnail">
						</div>
						<div class="col-md-7">
							<h4>New Row House for Sell</h4>
							<p><strong>Price : </strong>100000.00</p>
							<p><strong>Location : </strong>Bangali Square</p>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-dark btn-sm d-block float-right">Detail</button>
				</div>
			</div>
			<div class="card mb-3">			
				<div class="card-body">
					<div class="row">
						<div class="col-md-5">
							<img src="project-image/1.jpg" height="150" class="img-thumbnail">
						</div>
						<div class="col-md-7">
							<h4>New Row House for Sell</h4>
							<p><strong>Price : </strong>100000.00</p>
							<p><strong>Location : </strong>Bangali Square</p>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-dark btn-sm d-block float-right">Detail</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>