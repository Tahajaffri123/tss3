<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var a = 1;
		function show()
		{
			document.getElementById("msg").innerHTML=a;
			a++;
		}
	</script>
</head>
<body id="body">
<button onclick="show()">OK</button>
<br >
<h1>Counter : <span id="msg">0</span></h1>
</body>
</html>
