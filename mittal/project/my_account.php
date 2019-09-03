<?php
include("dbinfo.php");
include("header.php");
if (isset($_SESSION['if_user_is_logged_in']))
{
 header("location:login.php");
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-9 offset-md-2">
	<h3 class="my-bg p-2 text-center">My Accuont</h3>
<h4 class="text-center">Welcome : <?php echo$_SESSION['name']?></h4>
</div>
</div> 
</div>
<?php
include("footer.php");
?>