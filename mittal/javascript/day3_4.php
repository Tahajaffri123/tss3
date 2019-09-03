<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div
		{
			height: 200px;
			width:  200px;
            background-color: red;
            border-radius: 100px;
		}	
	</style>
	<script type="text/javascript">
		function change()
		{
         var a = document.getElementById("box").style.backgroundColor="green";
         var b = document.getElementById("box").style.backgroundColor="yellow";
         var c = document.getElementById("box").style.backgroundColor="pink";
         document.getElementById("box").style.backgroundColor=a;
         document.getElementById("box").style.backgroundColor=b;
         document.getElementById("box").style.backgroundColor=c;

		}
	</script>
</head>
<body>
<div id="box" onmousemove="change()"></div>
</body>
</html>