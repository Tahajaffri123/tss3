<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add()

		{

			var a=document.getElementById("ssm").value;

			document.getElementById("txt").innerHTML=a;
		}




	</script>
</head>
<body>

	<input type="text" onkeyup="add()" id="ssm">

	<p>Your Massages :<b id="txt"></b></p> 

</body>
</html>