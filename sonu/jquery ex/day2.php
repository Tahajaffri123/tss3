<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").mouseover(function(){
				$("p").slidedoun(2000);

				});
				$("a").mouseover(function(){
					$("p").sliderup(3000);
				});
				
			});
			
	</script>
	<style type="text/css">
		p{
			height: 200px;
			width: 200px;
			background-color: #123;
			margin: 0px;
			padding: 0px;
			border-radius: 5px;
			text-align: center;
			display: none;
		}
	</style>
</head>
<body>
<a href="#">click</a>
<p>lorem th beautfull and the main powor full continer and the use the mein </p>
</body>
</html>