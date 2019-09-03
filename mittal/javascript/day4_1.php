<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
		
			var a = 	document.createElement("h1");
			a.innerHTML = "hello";  
			document.getElementById("box").appendChild(a);
		} 
	</script>
</head>
<body>
<button onclick = "show()">OKK</button>
<div style="background-color: #ccc; height: 200px;  width:200px;" id="box"></div>
</body>
</html>