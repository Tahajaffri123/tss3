<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
  <script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>

</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Codeingiter</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mycode">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="mycode">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("home") ?>">Home</a>
      </li>      <li class="nav-item">

        <a class="nav-link" href="<?php echo site_url("home/about") ?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("home/contact") ?>">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("home/login") ?>">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("home/signup") ?>">Signup</a>
      </li>
    </ul>
  </div>
</nav>

<?php $this->load->view($pagename); ?>






<div class="container-fluid bg-dark">
  <div class="container">
    <p class="m-0 p-2 text-light text-center">Sample Footer</p>
  </div>
</div>
</body>
</html>