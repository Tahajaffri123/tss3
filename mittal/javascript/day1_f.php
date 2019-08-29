<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var a=1;
		function show()
		{
			// alert();
            document.getElementById('msg').innerHTML=a;
            a++;
		}
	</script>
</head>
<body>
<button onclick="show()">OKK</button>
<h1>counter : <span id="msg">0</span></h1>
</body>
</html>