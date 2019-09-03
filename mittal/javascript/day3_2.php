<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function keyup()
		{
			var a = document.getElementById("txt").value;
			// alert(a);
			document.getElementById("msg").innerHTML=a;
		}
	</script>
</head>
<body>
<input type="text" id="txt" onkeyup="keyup()">
<br />
<br />
<p>Your Message : <b id="msg"></b></p>
</body>
</html>