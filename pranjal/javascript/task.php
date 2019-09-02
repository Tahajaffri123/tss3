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
		function sap()
		{
			var a = document.getElementById("a_num").value;
			var b = document.getElementById("b_num").value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c = x-y;

			// alert("your Ans is "+c);
			document.getElementById("name").innerHTML="Your Ans is :"+" "+c;
		}
		function multi()
		{
			var a = document.getElementById("a_num").value;
			var b = document.getElementById("b_num").value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c = x*y;

			// alert("your Ans is "+c);
			document.getElementById("name").innerHTML="Your Ans is :"+" "+c;

		}
		function divide()
		{
			var a = document.getElementById("a_num").value;
			var b = document.getElementById("b_num").value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c = x/y;

			// alert("your Ans is "+c);
			document.getElementById("name").innerHTML="Your Ans is :"+" "+c;
			
		}
	</script>
</head>
<body>
	Enter Your No. is: <input type="text" id="a_num"/>
	<br />
	<br />

	Enter Your No. is: <input type="text" id="b_num"/>
	<br />
	<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

	<button onclick="add()">+</button>&nbsp; &nbsp; &nbsp; 
	<button onclick="sap()">-</button>&nbsp; &nbsp; &nbsp;
	<button onclick="multi()">*</button>&nbsp; &nbsp; &nbsp;
	<button onclick="divide()">/</button>&nbsp; &nbsp; &nbsp;
	<br />
	<br />

		<h2 id="name"></h2>
		

</body>
</html>