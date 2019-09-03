<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show(n)
		{
			var a = document.getElementById('f_num').value
			var b = document.getElementById('s_num').value

			 var x = parseInt(a);
			 var y = parseInt(b);
             switch(n)
             {
             	case 1: var c = x+y;
                     	break;
                case 2: var c = x-y;
                     	break;
                case 3: var c = x*y;
                    	break;
                case 4: var c = x/y;
                     	break;

             }
             document.getElementById('ans').innerHTML="your ans is"+ " " +c;

		}
   </script>
</head>
<body>
first number :-<input type="text" id="f_num">
<br  />
<br />
<br />
second number :-<input type="text" id="s_num">
<br />
<br />
<br />
<button onclick="show(1)">+</button>
<button onclick="show(2)">-</button>
<button onclick="show(3)">*</button>
<button onclick="show(4)">/</button>
<h1 id="ans"></h1>
</body>
</html>