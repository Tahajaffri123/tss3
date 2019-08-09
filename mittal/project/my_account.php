<?php
include("dbinfo.php");
include("header.php");
if (isset($_SESSION['if_user_is_logged_in']))
{
 header("location:login.php");
}
?>
<h1>My Account Page</h1>
<h4>Welcome : <?php echo$_SESSION['name']?></h4> 
<?php
include("footer.php");
?>