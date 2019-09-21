<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bootstrap.css")?>">
	<script type="text/javascript" src="<?php echo base_url("js/jquery-3.4.1.min.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/bootstrap.bundle.js")?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-info navbar-dark">
		<a href="#" class="navbar-brand text-light"><b>Codeingiter</b></a>
		<button class="navbar-toggler" type="button" data-target="#box" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="box">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?php echo site_url("admin/dash")?>" class="nav-link">Dash</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url("admin/user")?>" class="nav-link">Users</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url("admin/logout")?>" class="nav-link">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
<br />
<br />

		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-1">
					<table class="table table-dark table-hover table-bordered">
						<tr>
							<th>S.No.</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>Contact No.</th>
							<th>Status</th>
							<th>Change</th>
						</tr>
						<?php
						$n=1;
							foreach($info->result_array() as $data) 
							{
								if($data['status']==1){
									$a = "Active";
								}
								else{
									$a = "Deactive";
								}

						?>
						<tr>
							<td><?php echo $n;?></td>
							<td><?php echo $data['full_name'];?></td>
							<td><?php echo $data['username'];?></td>
							<td><?php echo $data['contact'];?></td>
							<td><?php echo $a;?></td>
							<td><a href="<?php echo site_url('admin/change_status/'.$data['id'].'/'.$data['status']);?>" class="btn btn-sm btn-danger">Change</a></td>
						</tr>
						<?php 
							$n++;
							}						?>
					</table>
				</div>
			</div>
		</div>
</body>
</html>