<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			setTimeout("demo()", 2000);
		}
		function demo()
		{
			alert();
			setTimeout("demo()", 2000);
		}
	</script>
</head>
<body>
<button onclick="show()">OK</button>
</body>
</html>