 <?php
include("db.php");
// print_r($_POST);
// die;
$u = $_POST['username'];
$p = $_POST['password'];

  $que = "SELECT * FROM admin WHERE username = '$u'";
 // die;
$result = mysqli_query($con, $que);
echo mysqli_num_rows($result);
// die;
if(mysqli_num_rows($result)==1)
{
 	// print_r($result);
	$data = mysqli_fetch_assoc($result);
	print_r($data);
  // die;
  	if($data['password']==$p)
  	{
  		$_SESSION['is_admin_logged_in'] = true;
  		header("location:dashbord.php");
  	}
  	else
  	{
  		$_SESSION['msg'] = "This Password Is Incorrect !";
  		header("location:index.php");
  	}
  }
  else
  {
  	$_SESSION['msg'] = "This Username And Password Is Incrrect !";
  	header("location:index.php");
   }

?> 