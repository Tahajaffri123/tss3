<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
		  border: 1px solid black;
		  width: 300px;
		  height: 50px;
		  padding: 30px 0px 0px 25px;
		}
		a{
		  border: 1px solid black;
		  background-color: white;
		  color: black;
		  margin-top: 10px;
		  padding: 10px 20px;
		  font-size: 16px;
		  cursor: pointer;
		}
	</style>
	<script type="text/javascript">
	
		function demo()
		{
			var add="";
			for(var i=1; i<=30; i++)
			{
				switch(i){
					case a : 	add+="a";
								break;
					case b : 	add+="b";
								break;
					case c : 	add+="c";
								break;
					case d : 	add+="d";
								break;
					case e : 	add+="e";
								break;
					case f : 	add+="f";
								break;
					default : 	add+="";

				}

			}
			document.getElementById("a").value= +add;
		}
	</script>
</head>
<body>
<br>
<br>
<input type="text" id="a">
<br>
<br>
<div><a onclick="demo()">a</a> <a onclick="demo()">b</a> <a onclick="demo()">c</a> <a onclick="demo()">d</a> <a onclick="demo()">e</a>
</div>

</body>
</html>
