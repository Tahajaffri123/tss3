<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #AF0012;
			border-radius: 50px;
		}

	</style>
	<script type="text/javascript">
		function change()
		{
			var a = Math.random();
			var b = a*600;
			var c = Math.floor(b);


			var x = Math.random();
			var y = x*800;
			var z = Math.floor(y);

			document.getElementById("box").style.marginTop=c+"px";
			document.getElementById("box").style.marginLeft=z+"px";



		}
	</script>
</head>
<body>
<div id="box" onmousemove="change()"></div>
</body>
</html>