<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").mouseover(function(){
				$("p").slideDown(2000);
			});
			$("a").mouseout(function(){
				$("p").slideUp(2000);
			});
		});

	</script>
	<style type="text/css">
		p{
			height: 300px;
			width: 200px;
			background-color: #00ACED;
			margin: 0;
			padding: 10px;
			border-radius: 5px;
			text-align: justify;
			display: none;
		}
	</style>
</head>
<body>
<a href="#">Click</a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>