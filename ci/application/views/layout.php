<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
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
          <a class="nav-link" href="<?php echo site_url("home") ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url("home/about") ?>">About</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("home/contact") ?>">Contact</a>
      </li>
      <?php if($this->session->userdata("is_user_logged_in")) 
          { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url("user") ?>">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url("user/profile") ?>">My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url("user/logout") ?>">Logout</a>
            </li>
          <?php }else{ ?>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url("home/login") ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url("home/signup") ?>">Signup</a>
        </li>
         <?php } ?>

    </ul>
  </div>
</nav>

<?php $this->load->view($pagename); ?>

<div class="container-fluid bg-dark">
  <div class="container">
    <p class="m-0 p-2 text-light text-center bg-dark">Sample Footer</p>
  </div>
</div>
</body>
</html>