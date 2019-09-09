<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
		div{
			height: 200px;
			width: 200px;
			background-color: red;
			}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").click(function(){
				// alert();
				// $("div").animate({"margin-left":"400px","margin-top":"400px"},2000);
				$("div").animate({"margin-top":"400px"}, 1000);
				$("div").animate({"margin-left":"400px"}, 1000);
				$("div").animate({"margin-bottom":"400px"}, 1000);
				$("div").animate({"margin-left":"400px"}, 1000);

			});
		});
	</script>
</head>
<body>
	<a href="#">Click</a>
	<br />
	<br />

	<div></div>

</body>
</html>