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
							<td>Perpose</td>
							<td><?php echo $data['perpose']; ?></td>
						</tr>
						<tr >
							<td colspan="2" class= text-center><button class="btn btn-info">More Detail
							</button>
						</tr>
              </table>
          </div>
      </div>
  </div>
  
<?php
include("footer.php");
?>