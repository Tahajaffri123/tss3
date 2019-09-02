<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var a = 1;
		function show(){
			// alert();
		 document.getElementById("count").innerHTML=a;
			a++;

		}
	</script>
</head>
<body>
<button onclick="show()">OK</button>
<h1>Count : <span id="count">0</span></h1>
</body>
</html>