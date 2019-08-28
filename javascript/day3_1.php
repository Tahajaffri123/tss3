<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add(a)
		{
			document.getElementById("txt").value+=a;
		}
		
	</script>
	<style type="text/css">
		a{
			display: inline-block;
			border:1px solid #000;
			border-radius: 5px;
			padding: 10px;
			margin-top: 20px;
		}
	</style>
</head>
<body>
<div style="margin: 20px auto; width: 300px; text-align: center; background-color: #CCC; height: 200px; padding: 20px;">
	Name <input type="text" id="txt" />
	<br />
	<a href="#" onclick="add('a')">a</a>
	<a href="#" onclick="add('b')">b</a>
	<a href="#" onclick="add('c')">c</a>
	<a href="#" onclick="add('d')">d</a>
	<a href="#" onclick="add('e')">e</a>
	<a href="#" onclick="add('f')">f</a>
</div>
</body>
</html>