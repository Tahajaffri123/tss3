<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			// var a = document.getElementById("msg").innerHTML;
			
			var a = document.getElementById("name").value;
			document.getElementById("msg").innerHTML=a;
		}
	</script>
</head>
<body id="body">
<button onclick="show()">OK</button>
<br >
Your Name <input type="text" id="name" />
<br >
<h1 id="msg"></h1>
</body>
</html>
