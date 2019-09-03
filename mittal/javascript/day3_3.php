<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			// alert();
			var a = document.getElementById("color").value
			document.getElementById("box").style.backgroundColor=a;
		}
	</script>
</head>
<body>
color<select id="color" onchange="show()">
      <option>Red</option>
      <option>Blue</option>
      <option>Black</option>
      <option>Green</option>
      <option>Pink</option>
	</select>
	<br />
	<br />
	<div id="box" style = "background-color: #ccc; height: 200px; width: 200px;"></div>

</body>
</html>