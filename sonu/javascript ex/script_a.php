<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">

	function show()
	{

		var a = document.getElementById("f_name").value;
		var b=  document.getElementById ("l_name").value;

		var x= parseInt(a);
		var y= parseInt(b);

		var c = x/y;



		alert(" this is my name "/c);
	}


	</script>
	</head>
</body>
</br/>
</br/>
<button onclick="show()">ok</button>
<br/>
<br/>

Full Nmae<input type="text" id="f_name">
<br/>
<br/>
Last Name<input type="text" id="l_name">



</body>
</html>