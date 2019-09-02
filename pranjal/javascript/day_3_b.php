<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show(){
			var a = document.getElementById("color").value;
			document.getElementById("box").style.backgroundColor= a;
		}
	</script>
</head>
<body>
	Color : <select onchange="show()" id="color">
		<option>black</option>
		<option>red</option>
		<option>green</option>
		<option>orange</option>
		<option>pink</option>
		<option>blue</option>
		<option>yellow</option>
	</select>
	<br />
	<br />
	<div id="box" style="background-color: black; height: 300px; width: 300px;"></div>
</body>
</html>