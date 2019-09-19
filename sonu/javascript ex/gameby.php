<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	#box{
		
		border-radius:150px;
        height: 130px;
        width: 130px;
	}

	

	</style>
	<script type="text/javascript">
		
		function show()
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
	<div id="box" onkeydown="show()"><img src="4.jpg"></div>
	

</body>
</html>