<input type="text" />
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			var a = document.getElementById("f_name").value;
			var b = document.getElementById("l_name").value;
			alert("Your Name is "+a+" "+b);
			
		}
	</script>
</head>
<body>
<button onclick="show()">OK</button>
<Br />
<Br />
<Br />
<Br />
First Name<input type="text" id="f_name"/>
<Br />
<Br />
Last Name<input type="text" id="l_name"/>
</body>
</html>