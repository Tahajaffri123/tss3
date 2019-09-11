<?php
include("db.php");
include("header.php");
$x = $_GET['detail'];

$que = "SELECT * FROM property WHERE id=$x";
$result = mysqli_query($conn, $que);
$data = mysqli_fetch_assoc($result);


?>
<div class="col-md-9">
    <h5 class="my-bg p-2">My Property</h5>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-dark table bordered table-hover">
              <tr>
                    <td>Title</td>
                    <td><?php echo $data['title'];?></td>
              </tr>
              <tr>
                    <td>property image</td>
                    <td><img src="property_img/<?php echo $data['image']; ?>"width="200" height="150" >
                     </td>
              </tr>

              <tr>
                    <td>Type</td>
                    <td><?php echo $data['type'];?></td>
              </tr>
              <tr>
                    <td>Price</td>
                    <td><?php echo $data['price'];?></td>
              </tr>
              <tr>
                  <td>Area</td>
                  <td><?php echo $data['area'];?></td>
              </tr>
                  <tr>
                  <td>perpose</td>
                  <td><?php echo $data['perpose'];?></td>
              </tr>
                  <tr>
                  <td  colspan="2"><button class="btn-primary" data-toggle="collapse" data-target="#demo">More Dtails</button></td>
              </tr>
                  <div id="demo" class="collapse my-details">
                  <?php
                  if(isset($_SESSION['is_user_logged_in']))
                         {
                  ?>
                    <tr id="demo" class="collapse">
                      <td>Location</td>
                      <td><?php echo $data['location'];?></td>
                      </tr>

                      <tr id="demo" class="collapse">
                      <td>Complete Address</td>
                      <td><?php echo $data['address'];?></td>
                      </tr>

                      <tr id="demo" class="collapse">
                      <td>Details</td>
                      <td><?php echo $data['detail'];?></td>
                      </tr>
                <?php
                }
                  else 
                  { 
                    echo $_SESSION['msg']="user not loged in ";  
                   unset($_SESSION['msg']);
                  } 
                  ?>
             </div>  
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include("footer.php");
?>
            