<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("#box").show(2000);
				$("#box1").show(2000);
				$("#box2").show(3000);
			});
		});

	</script>
	<style type="text/css">
		#box{
			height: 300px;
			width: 300px;
			background-color: #21ACEb;
			display: none;
		}
		#box1{
			height: 200px;
			width: 2000px;
			background-color: yellow;
			/*display: none;*/
		}
		#box2{
			height: 100px;
			width: 100px;
			background-color: red;
			display: none;
		}
	</style>
</head>
<body>
<button>OK</button>
<div id="box"> </div>
<div id="box1"></div>
<div id="box2"></div>

</body>
</html>