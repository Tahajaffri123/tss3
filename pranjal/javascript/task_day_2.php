<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function a()
		{
			document.getElementById("input").value+="A";
			// alert()
		}
		function b()
		{
			document.getElementById("input").value+="B";
		}
		function c()
		{
			document.getElementById("input").value+="C";
		}
		function d()
		{
			document.getElementById("input").value+="D";
		}
		function e()
		{
			document.getElementById("input").value+="E";
		}


		
	</script>
	<style type="text/css">
		div{
			border : 2px solid black;
			height: 200px;
			width: 400px;
		}
	
	
		.button{
    			display: inline-block;
   			    padding: 20px;
   			    margin: 10px;
    			text-align: center;
    			border:2px solid black;
    			color: #000;
    			font-weight: bold;
				text-decoration-line:none;
				} 
		.demo{
			margin-top:  10px;
			margin-left: 90px;
			border: 2px solid;
		} 

	</style>
</head>
<body>
	 
	<br/>
	<br/>
	<br/>

		<div id="box">
			<br />
		<input type="text" id="input" class="demo">
		<br />
		<br />

		<a class="button" href="#" onclick="a()" >A</a>
		<a class="button" href="#" onclick="b()" >B</a>
		<a class="button" href="#" onclick="c()" >C</a>
		<a class="button" href="#" onclick="d()" >D</a>
		<a class="button" href="#" onclick="e()" >E</a>


	</div>

</body>
</html>