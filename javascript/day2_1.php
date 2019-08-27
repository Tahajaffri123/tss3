<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			document.getElementById("box").style.backgroundColor="red";
			document.getElementById("box").style.height="400px";
			document.getElementById("box").style.width="400px";
			document.getElementById("box").style.borderRadius="50px";
			document.getElementById("box").style.fontSize="25px";
			document.getElementById("box").style.color="#FFFFFF";

		}
	</script>
	<style>
		div{
			height: 200px;
			width: 200px;
			background-color: #2AC124;
		}
	</style>
</head>
<body>
<button onclick="show()">OK</button>
<div id="box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco.</div>
</body>
</html>