<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{

			margin: 20px auto;
			width: 500px;
			min-height: 500px;
			padding: 10px;
			border-radius: 20px;
			/*background-color: #005500;*/
			text-align: center;
		}
		.small_img{
			border:1px solid #000;
			padding: 5px;

		}

		body{
			background-color: #123;
		}

	</style>
	<script type="text/javascript">
		function change(a)
		{
			document.getElementById("img").setAttribute("src", a);
		}
	</script>
</head>
<body id="go">
<div id="box">
	<img id="img" src="n.jpg" height="400" width="400" />
	<hr />
	<img class="small_img" onmouseover="change('n2.jpg')" src="n2.jpg" height="100" width="100" />
	<img class="small_img" onmouseover="change('n1.jpg')" src="n1.jpg" height="100" width="100" />
	<img class="small_img" onmouseover="change('n2.jpg')" src="n2.jpg" height="100" width="100" />
	<img class="small_img" onmouseover="change('n.jpg')" src="n.jpg" height="100" width="100" />
</div>
</body>
</html>