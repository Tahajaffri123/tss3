<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add()
		{
		var a = document.getElementById("first").value;
		var b = document.getElementById("second").value;

		var x = ParseInt(a);
	 	var y = ParseInt(b);
	 	var z=x + y;

	 	alert();
		}

	</script>
</head>
<body>

<button onclick="add()">+</button>
<button>-</button>
<button>*</button>
<button>/</button>

</body>
</html>