<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			margin: 20px auto;
			width: 600px;
			text-align: center;
			min-height: 400px;
			padding: 10px;
			border-radius: 10px;
			background-color: #005500;
		}
		.small_img{
			border: 1px solid #000;
			padding: 5px;
		}
	</style>
	<script type="text/javascript">
		function change(a)
		{
			alert(a)
			// document.getElementById("img").setAttribute("src", a);
		}
	</script>
</head>
<body>
<div id="box">
	<img id="img" src="1.jpeg" height="400" width="400" />
	<hr />
	<img class="small_img" onmouseover="change('1.jpeg')" src="1.jpeg" height="100" width="100" />
	<img class="small_img" onmouseover="change('2.jpeg')" src="2.jpeg" height="100" width="100" />
	<img class="small_img" onmouseover="change('3.jpeg')" src="3.jpeg" height="100" width="100" />
	<img class="small_img" onmouseover="change('4.jpg')" src="4.jpg" height="100" width="100" />

</div>
</body>
</html>