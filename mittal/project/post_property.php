<?php
include("dbinfo.php");

if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
?>



<div class="row">

<div class="col-md-8 offset-md-2">
      <h4 class="my-bg p-2 text-center">Post-Your-Property</h4>
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card bg-dark text-light">                          
                        <form action="save_property.php" method="post" enctype="multipart/form-data">
                            <div class="card bg-dark text-light">
                                    <div class="card-header">
                                          <h5 class="text-center">Post-Your-Property</h5>
                                    </div>
             <div class="card-body">
                  <div class="form-group">            
                      <label>Title</label>
                              <input name="title" type="text" class="form-control">
                        </div> 
                        <div class="form-group">
                        <label>Property Image</label>
                        <input name="image" type="file" class="form-control">
                        <p class="text-danger">
                        <?php
                        if(isset($_SESSION['msg']))
                        {
                          echo $_SESSION['msg'];
                          unset($_SESSION['msg']);
                        }
                        ?> 
                        </div>                 
                        <div class="form-group">            
                           <label>Type</label>
                          <select class="form-control" name="type">
                                          <option>Select</option>
                                          <option>flat</option>
                                          <option>row-house</option>
                                          <option>banglow</option>
                                          <option>plot</option>
                                </select>
                  </div>      
                         <div class="form-group">            
                   <label>Price</label>
              <div class="input-group">
                   <input type="text" name="price" class="form-control"
                                          >
                         <div class="input-group-append">
                                <span class="input-group-text">&#8377;</span>
                       </div>
                  </div>
              </div>
             <div class="form-group">            
              <label>Area</label>
                   <div class="input-group">
                         <input type="text" name="area" class="form-control">
                                          
                    <div class="input-group-append">
                            <span class="input-group-text">squar ft</span>
                   </div>
             </div>
      </div>      
            <div class="form-group">            
                   <label>Location</label>
                         <select class="form-control" name="location">
                               <option>Select</option>
                               <option>Bangali Square</option>
                               <option>Vijay Nagar</option>
                              <option>M.G.Road</option>
                               <option>Palaysia</option>
                               <option>Patnipura</option>
                               <option>Annpurna</option>
                        </select>
                   </div>
                              <div class="form-group">            
                                    <label>Perpose</label>
                                    <select name="perpose" class="form-control">
                                          <option>Select</option>
                                          <option>For Rent</option>
                                          <option>For Sell</option>
                                          
                                    </select>
                              </div>
                              <div class="form-group">                  
                                    <label>Complete Address</label>
                                    <textarea name="address" class="form-control"></textarea>
                              </div>
                              <div class="form-group">                  
                                    <label>Details</label>
                                    <textarea name="detail" class="form-control"></textarea>
                              </div>
                        </div>
                        <div class="card-footer text-center">
                          <button class="btn btn-info center-block">Post</button>
                        </div>
                           </div>
                        </form>
                        </div>

                    </div>
                </div>
             </div>
          </div>
         </div> 

      <?php
	include("footer.php");
	?>
