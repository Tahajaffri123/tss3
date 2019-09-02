<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// $("#box").hide();
				// $("#box").show();
				
				// $("#box").slideUp(5000);
				// $("#box").slideDown(3000);
				// $("#box").fadeOut(2000);
				$("#box").fadeIn(2000);
			});
		});
		/*
			jQuery Effects

			1	.hide()
			2	.show()
			3	.slideUp()
			4	.slideDown()
			5	.fadeIn()
			6	.fadeOut()
			7	.css()
			8	.animate()

		*/
	</script>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #21ACED;
			display: none;
		}
	</style>
</head>
<body>
<button>OK</button>
<div id="box"></div>
</body>
</html>