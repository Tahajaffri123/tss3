<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
           $("a").click(function(){
             // $("p").css({
             // 	     "background-color":"red",
             // 	     "height":"300px",
             // 	     "width":"300px",
             // });
             $("p").animate({"margin-right":"300px"}, 1000);
             $("p").animate({"margin-bottem":"300px"}, 1000);
             // $("p").animate({"margin-right":"300px"}, 1000);
             // $("p").animate({"margin-bottem":"300px"}, 1000);

           });
		});
	</script>
	<style type="text/css">
		p
		{
			height: 200px;
			width: 200px;
			background-color: #ccc;
		}
	</style>
</head>
<body>
<a href="#">click</a>
<p></p>
</body>
</html>