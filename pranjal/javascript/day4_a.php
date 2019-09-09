<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show(){
			// alert();
			var a = document.createElement("h1");

			a.innerHTML = "Pranjal Jaiswal";
			document.getElementById("box").appendChild(a);			
		}
	</script>

</head>
<body>
	<button onclick="show()">OK</button>
	<br />
	<br />

	<div id="box" style="height: 300px; width: 300px; background-color: red;"></div>
</body>
</html>