<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			var a = document.getElementById("f_num").value;			
			var b = document.getElementById("s_num").value;	


			var x = parseInt(a);
			var y = parseInt(b);

			var c = x+y;

			alert("Your Ans is "+c);		
		}
	</script>
</head>
<body>

First Number<input type="text" id="f_num"/>
<Br />
<Br />
Second Number<input type="text" id="s_num"/>
<Br />
<Br />
<button onclick="show()">OK</button>
</body>
</html>
