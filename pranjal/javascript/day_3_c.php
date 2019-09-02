<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<script type="text/javascript">
		function change(){
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
	<style type="text/css">
		div{
			height: 100px;
			width: 100px;
			background-color: red;
			border-radius: 50px;
		}
	</style>
</head>
<body>
	<div id="box" onmousemove="change()"></div>
</body>
</html>