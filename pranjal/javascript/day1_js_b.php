<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(){
			// alert()
			var a = document.getElementById("f_name").value;
			var b = document.getElementById("l_name").value;
					alert("Your Full Name is :" +a+" "+b);

		}
	</script>
</head>
<body>
	First Name : <input type="text" id="f_name">
	<br />
	<br />
	Last Name : <input type="text" id="l_name">
	<br />
	<br />

	<button onclick="demo()">OK</button>
</body>
</html>