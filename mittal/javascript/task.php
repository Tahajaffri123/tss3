<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add()
		{
			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c= x+y;
			document.getElementById("cal").innerHTML=c;
			
		}
		function min()
		{
			var a = document.getElementById('f_num').value;
			var b = document.getElementById('s_num').value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c= x-y;
		document.getElementById("cal").innerHTML=c;
		}
		function multy()
		{
			var a = document.getElementById('f_num').value;
			var b = document.getElementById('s_num').value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c= x*y;
		document.getElementById("cal").innerHTML="your ans is"+" "+c;
		}
		function divide()
		{
			var a = document.getElementById('f_num').value;
			var b = document.getElementById('s_num').value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c= x/y;
        document.getElementById("cal").innerHTML="your ans is"+" "+c;
		}
	</script>
</head>
<body>
Enter First Number :- &nbsp;&nbsp;<input type="text" id="f_num" />
<br />
<br />
Enter Second Number :- &nbsp;&nbsp;<input type="text" id="s_num" />
<br />
<br />

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button onclick="add()">+</button>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
<button onclick="min()">-</button>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
<button onclick="multy()">*</button>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
<button onclick="divide()">/</button>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
<br/>
<h2 id="cal"></h2>
</body>
</html>