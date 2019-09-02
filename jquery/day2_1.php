<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// var a = $("input").val();
				// alert(a);
				var a = "rohit";
				$("input").val(a);
				$("h1").html(a);
				// $("img").attr("src", "1.jpg");
			});
		});

	</script>
</head>
<body>
<button>OK</button>
<input type="text" />
<input type="text" />
<h1></h1>
<h1></h1>
<h1></h1>
</body>
</html>