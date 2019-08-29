<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			document.getElementById("pwd").setAttribute("type","text");
		}
		function hide()
		{
			document.getElementById("pwd").setAttribute("type","password");
		}
	</script>
</head>
<body>
	Password :- <input type="password" id="pwd">
	<button onclick="show()">Show</button>
	<button onclick="hide()">Hide</button> 
</body>
</html>