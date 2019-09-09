<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// alert();
				// $("#box").hide();
				// $("#box").slideUp(2000);
				// $("#box").fadeOut(2000);
				// $("#box").fadeIn(2000);
				// $("#box").slideDown(2000);
				$("#box").show();

			});
		});
		// Jquery Effects
		// 1 .hide()
		// 2 .show()
		// 3 .slideUp()
		// 4 .slideDown()
		// 5 .fadeIn()
		// 6 .fadeOut()
	</script>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #000;
			display: none;
		}
	</style>
</head>
<body>
	<button>OK</button>
	<br />
	<br />
	<div id="box"></div>
</body>
</html>