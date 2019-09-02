<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add()
		{
			var a = document.createElement("h1");

			a.innerHTML="hello";
			document.getElementById("box").appendChild(a);
			
			/*var a = document;
			var b = a.getElementById("box");
			var c = b.innerHTML;*/

		}
	</script>
</head>
<body>
<button onclick="add()">OK</button>
<Br />
<br >
<div style="height: 200px;width: 200px;background-color: #CCC" id="box"></div>
</body>
</html>