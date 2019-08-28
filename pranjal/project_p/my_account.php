<?php
include("db.php");

include("header.php");
//print_r($_SESSION);
?>

<div class="col-md-9 offset-2">
	<h2 class="my-bg p-2 text-center">My Account</h2>
	<div class="row">
		<div class="col-md-12">
			<br />
			<h1 class="text-center">Welcome : <?php echo $_SESSION['name'];?></h1>
		</div>
	</div>
</div>
	</div>
</div>
<br />
<br />
<br />

<?php
include("footer.php");
?>