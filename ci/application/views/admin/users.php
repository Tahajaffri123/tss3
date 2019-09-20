<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#">Codeingiter</a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url("admin/dash") ?>">Dash</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url("admin/users") ?>">Users</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url("admin/logout") ?>">Logout</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h4>List all registred user</h4>
				<table class="table table-hover table-dark table-bordered">
					<tr>
						<th>S.No.</th>
						<th>Full Name</th>
						<th>Email</th>
						<th>Contact</th>
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
							<td><?php echo $n; ?></td>
							<td><?php echo $data['full_name']; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td><?php echo $data['contact']; ?></td>
							<td><?php echo $a; ?></td>
							<td><a href="<?php echo site_url('admin/change_status/'.$data['id'].'/'.$data['status']); ?>" class="btn btn-sm btn-warning">Change</a></td>
						</tr>
					<?php
					$n++;
					}
					?>
				</table>
			</div>
		</div>
	</div>

</body>
</html>