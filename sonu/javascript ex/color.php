<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		
		function show()

		{
			var a = document.getElementById("color").value;
			document.getElementById("box").style.backgroundColor=a;
			document.getElementById("box1").style.backgroundColor=a;

		}
	</script>
</head>
<body>

	Color<select onchange="show()" id="color">
		<option>red</option>
		<option>yellow</option>
		<option>green</option>
		<option>blue</option>
		<option>gree</option>
		<option>black</option>
		<option>pink</option>

	</select>
<div id="box" style="background-color: #ccc; height: 300px; width: 300px;"></div>
<br>
<div id="box1" style="background-color: #ccc; height: 300px; width: 300px; text-align: center;"></div>

	
</div>
</body>
</html>