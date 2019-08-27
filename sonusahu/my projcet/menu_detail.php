<?php
include("db.php");
// Backdoor Protaction Code
if(! isset($_SESSION['is_user_logged_in']))
{
  header("location:login.php");
}
include("header.php");

$x = $_GET['detail'];

$que = "SELECT * FROM property WHERE id=$x";
$result = mysqli_query($conn, $que);
$data = mysqli_fetch_assoc($result);

// print_r($_SESSION);
?>
   
   <div class="col-md-9">
   	<h5 class="my-bg p-2"><center>My Property Detail</center></h5>
   	<div class="row">
   		<div class="col-md-12">
   			<table class="table table-dark table bordered table-hover">
   				<tr>
   					<td>title</td>
   					<td><?php echo $data['title']; ?></td>
   				</tr>
              <tr>
                    <td>property image</td>
                    <td><img src="property_img/<?php echo $data['image']; ?>"width="200" height="150" >
              </tr>

   				     <tr>
   					        <td>type</td>
                    <td><?php echo $data['type']; ?></td>
                </tr>

                <tr>
                    <td>area</td>
                    <td><?php echo $data['area']; ?></td>
                </tr>

                <tr>
                  <td>Price</td>
                  <td><?php echo $data['price']; ?></td>
   				      </tr>

   					    <tr>
   					      <td>Location</td>
   					      <td><?php echo $data['location']; ?></td>
   				      </tr>

   				      <tr>
   					      <td>Perpose</td>
   					      <td><?php echo $data['perpose']; ?></td>
   				      </tr>
                 

                <tr>
         					<td>Address</td>
         					<td><?php echo $data['address']; ?></td>
         				</tr>

                <tr>
                  <td>Detail</td>
         					<td><?php echo $data['detail']; ?></td>
         				</tr>

   			      </table>
   		   </div>
   		 </div>
   	 </div>
   	</div>
  </div>
</div>
   		
 <?php
include("footer.php");
?>

   					