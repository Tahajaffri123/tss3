<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show(){
			// alert();
			document.getElementById("pas").setAttribute("type" , "text");
		}
		function hide(){
			// alert();
			document.getElementById("pas").setAttribute("type", "Password");
		}
	</script>
</head>
<body>
	Password : <input type="text" id="pas" />
	<br />
	<br />

	<button onclick="show()">Show</button>
	<button onclick="hide()">Hide</button>
</body>
</html>