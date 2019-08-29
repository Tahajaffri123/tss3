<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			var a = document.getElementById('name').value
			document.getElementById('msg').innerHTML="your value is"+" "+a;
		}
		
	</script>
</head>
<body>
<input type="text" id="name">
<br />
<br />
<button onclick="show()">OKK</button>
<br />
<br />
<h1 id="msg"></h1> 
</body>
</html>