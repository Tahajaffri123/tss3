<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		div {

		
		}
    function demo()
		{
			var color="";
			for(var i=1; i<=6; i++)
			{
				var  add="";
				switch(c){
					case a : 	add+="A";
								break;
					case b : 	add+="B";
								break;
					case c : 	add+="C";
								break;
					case d : 	add+="D";
								break;
					case e : 	add+="E";
								break;
					case f : 	add+="F";
								break;
					
					default : 	add+=c;
							
				}

			}
			document.getElementById("body").style.backgroundColor="#"+add;
			setTimeout("demo()", 300);
		}

	</script>
	
</body>
</html>