<?php
include("dbinfo.php");
include("header.php");

$x = $_GET['detail'];
// print_r($_GET);
// die;
$que = "SELECT * FROM property WHERE id = $x ";
$result = mysqli_query($con, $que); 
$data = mysqli_fetch_assoc($result);
 ?>
 <div class="col-md-9 offset-md-2">
			<h5 class="my-bg p-2 text-center">My Property</h5>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-hover table-dark table-bordered">
						<tr>
							<td>Title</td>
							<td><?php echo $data['title']; ?></td>
						</tr>
						<tr>
							<td>Type</td>
							<td><?php echo $data['type']; ?></td>
						</tr>
						<tr>
							<td>Price</td>
							<td><?php echo $data['price']; ?></td>
						</tr>
                        <tr>
							<td>Area</td>
							<td><?php echo $data['area']; ?></td>
						</tr>
						<tr>
							<td>location</td>
							<td><?php echo $data['location']; ?></td>
						</tr>
						<tr>
							<td>Perpose</td>
							<td><?php echo $data['perpose']; ?></td>
						</tr>
					
			<tr >
				<td colspan="2" class= "text-center">
			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">More Detail
			</button></td></tr>
			
			<?php
			if(isset($_SESSION["is_user_logged_in"]))
			{
			?>
			
            <tr id="demo" class="collapse">
				<td>address</td>
				<td><?php echo $data['address']; ?></td>
			</tr>
			<tr id="demo" class="collapse">
				<td>detail</td>
				<td><?php echo $data['detail']; ?></td>
			</tr>
	
			<?php
		   }
           else
           {
           	 echo $_SESSION['msg'] = "Please Go And Register Your Account";?> <a href="signup.php" class="text-danger">Register</a>
           	 <?php
           	 unset($_SESSION['msg']);

           }
		?>
	   
              </table>
          </div>
      </div>
  </div>
       


<?php
include("footer.php");
?>