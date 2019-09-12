<?php
$con = mysqli_connect("localhost","root","password","mittal");
	$que = "SELECT * FROM state ";
	$result = mysqli_query($con, $que);
?>
 <!DOCTYPE html>
 <html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		   $("#state_id").change(function(){
		     var a = $(this).val(); 
		   	  $.ajax({
		   	  	     url : "state.php",
		   	  	     type : "post",
		   	  	     data : {state_id : a},
		   	  	     success : function(responce)
		   	  	     {
		   	  	     	 $("#city_id").html(responce);
		   	  	     }
		   	  })

		   });	

		});
		
	</script>
</head>
<body>
	Select state <select id="state_id">
	<option>Select</option>
	<?php
        while ($data=mysqli_fetch_assoc($result)) 
        {
          echo "<option value='".$data['id']."'>".$data['state_name']."</option>";
        }
	?>
</select>
<br />
<br />
<br />
select city <select id="city_id">
	<option>Select first State </option>
</select>
</body>
</html>