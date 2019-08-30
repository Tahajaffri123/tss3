<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(){
			// alert()
			document.getElementById("show").style.backgroundColor="pink";
			document.getElementById("show").style.borderRadius="100px";
			document.getElementById("show").style.border="2px solid black";
			document.getElementById("show").style.fontSize="10px";


		}
	</script>
	<style type="text/css">
		div{
			height: 300px;
			width: 300px;
			background-color: red;
		}
	</style>
</head>
<body>
	<button onclick="demo()">OK</button>
	<br />
	<br />

	<div id="show">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
</body>
</html>