<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	      function show()
		  {
		  	document.getElementById("box").style.backgroundColor="red";
		  	document.getElementById("box").style.height="400px";
		  	document.getElementById("box").style.width="400px";
		  	document.getElementById("box").style.borderRadius="50px";
		  	document.getElementByid("box").style.fontSize="25px";
		  	document.getElementById("box").style.color="#ffffff";

		  }
	</script>
    <style>
	div{
		height: 200px;
		width: 200px;
		background-color: #abc191;

	</style>	
</head>
<body>

	<button onclick="show()">ok</button>
	<div id="box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim amco laboris nisi ut alia pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui  deserunt mollit anim id est laborum.</div>

</body>
</html>