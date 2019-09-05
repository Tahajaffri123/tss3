<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
		  border: 1px solid black;
		  width: 300px;
		  height: 50px;
		  padding: 30px 0px 0px 25px;
		}
		a{
		  border: 1px solid black;
		  background-color: white;
		  color: black;
		  margin-top: 10px;
		  padding: 10px 20px;
		  font-size: 16px;
		  cursor: pointer;
		}
	</style>
	<script type="text/javascript">
		function a()
		{
		
			document.getElementById("a").innerHTML="a";

		}
		function b()
		{
		
			document.getElementById("a").innerHTML="b";

		}
		function c()
		{
		
			document.getElementById("a").innerHTML="c";

		}
		function d()
		{
		
			document.getElementById("a").innerHTML="d";

		}
		function e()
		{
		
			document.getElementById("a").innerHTML="e";

		}
	</script>
</head>
<body>
<br>
<br>
<textarea rows="1" cols="50" id="a"></textarea>
<br>
<br>
<div><a onclick="a()">a</a> <a onclick="b()">b</a> <a onclick="c()">c</a> <a onclick="d()">d</a> <a onclick="e()">e</a>
</div>
</body>
</html>
