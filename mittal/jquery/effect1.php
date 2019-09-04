<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
          $("button").click(function(){
            $("#box").slideDown(2000);
          });
		});
	</script>
	<style type="text/css">
		#box
		{
			height: 200px;
			width: 200px;
			background-color: red;
			display: none;
		}
	</style>
</head>
<body>
	<button>OKK</button>
<div id="box"></div>

</body>
</html>