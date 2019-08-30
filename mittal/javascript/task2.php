<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#div
		{
			height: 50px;
			width: 250px;
			/*background-color: red;*/
			border: 2px solid black;
		}
	
		.ancer
		{
			 text-decoration: none;
             display: inline-block;
             margin: 10px 10px 0px 10px;
              /*color: white;*/
             border: 2px solid #e7e7e7;
             border-radius: 5px;
             text-decoration : none;
             padding : 5px;
             text-align: center;
             background-color: #e7e7e7;
             font-weight: bold;
            
		}
	</style>
	<script type="text/javascript">
	    function add(a)
	    {
	    	document.getElementById("input").value+=a;
	    }
	</script>
</head>
<body>
&nbsp; &nbsp; &nbsp; &nbsp; <input type="text" id="input" />
<br/>
<br />
<div id="div">
	<a class="ancer" href="#" onclick="add('a')">A</a>
	<a class="ancer" href="#" onclick="add('b')">B</a>
	<a class="ancer" href="#" onclick="add('c')">C</a>
	<a class="ancer" href="#" onclick="add('d')">D</a>
	<a class="ancer" href="#" onclick="add('e')">E</a>
</div>
</body>
</html>