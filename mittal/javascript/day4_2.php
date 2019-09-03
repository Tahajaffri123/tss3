<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add()
		{
			var input = document.createElement("input");
			input.setAttribute("type","text");

			var br1 = document.createElement("br");
			var br2 = document.createElement("br");
            
            document.getElementById("body").appendChild(br1);
            document.getElementById("body").appendChild(br2);

            document.getElementById("body").appendChild(input);


 		}
	</script>
   
</head>
<body id="body">
<button onclick="add()">OKK</button>
</body>
</html>