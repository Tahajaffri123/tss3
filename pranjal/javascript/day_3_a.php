<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add(){
			var a = document.getElementById("txt").value;
			document.getElementById("msg").innerHTML=a;
		}
	</script>
</head>
<body>
	<input type="text" onkeyup="add()" id="txt" />
	<p>Your Message : <b id="msg"></b></p>
</body>
</html>