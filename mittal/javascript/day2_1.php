<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			// alert();
			document.getElementById("box").style.backgroundColor="red";
			document.getElementById("box").style.height="200px";
			document.getElementById("box").style.width="200px";
			document.getElementById("box").style.borderRadius="50px";

		}
	</script>
	<style type="text/css">
		div
		{
			height: 100px;
			width: 100px;
			background-color: #2AC124;
		}
	</style>
</head>
<body>
	<button onclick="show()">OK</button>
	<br />
	<br />
	<div id="box"></div>
</body>
</html>