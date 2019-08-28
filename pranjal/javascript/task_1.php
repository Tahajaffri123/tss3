<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		
		function add()
		{
			var a = document.getElementById("a_num").value;
			var b = document.getElementById("b_num").value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c = x+y;

			// alert("your Ans is "+c);
			document.getElementById("name").innerHTML="your ans is :"+" "+c;
		}
	</script>
</head>
<body>
	Enter Your No. is : <input type="text" name="a_num">
	<br />
	<br />
	Enter Your No. is : <input type="text" name="b_num">


</body>
</html>