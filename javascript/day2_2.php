<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		
		function demo()
		{
			var color="";
			for(var i=1; i<=6; i++)
			{
				var a = Math.random();
				var b = a*15;
				var c = Math.floor(b);
				switch(c){
					case 10 : 	color+="A";
								break;
					case 11 : 	color+="B";
								break;
					case 12 : 	color+="C";
								break;
					case 13 : 	color+="D";
								break;
					case 14 : 	color+="E";
								break;
					case 15 : 	color+="F";
								break;
					
					default : 	color+=c;
							
				}

			}
			document.getElementById("body").style.backgroundColor="#"+color;
			setTimeout("demo()", 300);
		}
	</script>
</head>
<body id="body">

</body>
<script type="text/javascript">
	demo();
</script>
</html>