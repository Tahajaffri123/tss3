<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.big-box{
			padding: 300px 0px 200px 500px;
		}
		.box{
			height: 100px;
			width: 100px;
			border: 2px solid #000;
			display: inline-block;
		}
	</style>
	<script type="text/javascript">
		function show(a)
		{
			document.getElementById("body").style.backgroundColor=a;
		}
	</script>
	
</head>
<body id="body">
<div class="big-box">
	<div class="box" style="background-color: red" onclick="show('red')"></div>
	<div class="box" style="background-color: gray" onclick="show('grey')"></div>
	<div class="box" style="background-color: orange" onclick="show('orange')"></div>
	<div class="box" style="background-color: green" onclick="show('green')"></div>
	<div class="box" style="background-color: yellow" onclick="show('yellow')"></div>
	<div class="box" style="background-color: pink" onclick="show('pink')"></div>
</div>

</body>
</html>