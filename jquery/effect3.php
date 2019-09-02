<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").click(function(){

				// $("p").css({
				// 		"background-color":"red", 
				// 		"font-size":"20px", 
				// 		"color":"white"
				// 	});
				$("p").animate({"margin-left":"400px", "margin-top":"400px"}, 1000);
				// $("p").animate({"margin-top":"400px"}, 1000);
				// $("p").animate({"margin-left":"0px"}, 1000);
				// $("p").animate({"margin-top":"0px"}, 1000);
			});
			
		});

	</script>
	<style type="text/css">
		p{
			height: 200px;
			width: 200px;
			background-color: #00ACED;
			
		}
	</style>
</head>
<body>
<a href="#">Click</a>
<p></p>
</body>
</html>