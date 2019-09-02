<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			var a = document.getElementById("color").value;
			document.getElementById("box").style.backgroundColor=a;
		}
	</script>
</head>
<body>
Color <select onchange="show()" id="color">
		<option>red</option>
		<option>green</option>
		<option>blue</option>
		<option>yellow</option>
		<option>pink</option>
		<option>black</option>
</select>
<div id="box" style="background-color: #CCC; height: 200px; width: 200px;">
</div>
</body>
</html>