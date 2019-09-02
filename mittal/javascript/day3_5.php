<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div
		{
			margin: 20px auto;
			padding: 10px;
			background-color: #005500;
			min-height:400px;
			/*height: 400px;*/
			width: 500px;
			border-radius: 10px;
			text-align: center;
		}
		.small_img
		{
			border:2px solid #000;
			padding: 5px;
		}
	</style>
	<script type="text/javascript">
		function change(a)
		{
			 document.getElementById("img").setAttribute("src",a);
		} 
	</script>
</head>
<body>
<div id="box">
	<img src="1.jpeg" id="img" height="400px" width="400px" />
	<hr />

	<img src="1.jpeg" class="small_img" onmouseover="change('1.jpeg')" height="100px" width="100px" />

	<img src="2.jpeg" class="small_img" onmouseover="change('2.jpeg')" height="100px" width="100px" />

	<img src="3.jpeg" class="small_img" onmouseover="change('3.jpeg')" height="100px" width="100px" />

	<img src="4.jpg" class="small_img" onmouseover="change('4.jpg')" height="100px" width="100px" />
</div>
</body>
</html>