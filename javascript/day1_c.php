<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show(n)
		{

			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;	


			var x = parseInt(a);
			var y = parseInt(b);

			switch(n){
				case 1 : var c = x+y;
						break;
				case 2 : var c = x-y;
						break;
				case 3 : var c = x/y;
						break;
				case 4 : var c = x*y;
						break;
			}
			

			document.getElementById("ans").innerHTML="Your ans is "+c;
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
<button onclick="show(1)">+</button>
<button onclick="show(2)">-</button>
<button onclick="show(3)">/</button>
<button onclick="show(4)">x</button>
<h2 id="ans"></h2>
</body>
</html>
