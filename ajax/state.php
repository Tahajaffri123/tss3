<?php
$con=mysqli_connect("localhost", "root", "password", "tss3");
$que = "SELECT * FROM state";
$result = mysqli_query($con, $que);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#state_dd").change(function(){
				var a = $(this).val();
				$.ajax({
					url : "get_city.php",
					type : "post",
					data : { stateid : a },
					success : function(response){
						//alert(response);
						$("#city_dd").html(response);
					}
				})

			});
		});
	</script>
</head>
<body>
Select State <select id="state_dd">
				<option>Select</option>
				<?php
				while($data=mysqli_fetch_assoc($result))
				{
					echo "<option value='".$data['id']."'>".$data['name']."</option>";
				}

				?>
			</select>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
Select City <select id="city_dd">
				<option>Select State First</option>
			</select>
</body>
</html>