<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(){
			// alert()
			var a = document.getElementById("box").value;
				document.getElementById("msg").innerHTML=a;
		}
	</script>
</head>
<body>
	Your Name is : <input type="text" id="box">
	<br />
	<br />

	<button onclick="demo()">OK</button>
	<h2 id="msg"></h2>
</body>
</html>