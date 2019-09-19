<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add(a)
		{

			document.getElementById("txt").value+=a;
			
		}


	</script>
	<style type="text/css">
		
		a{
			margin-top: 30; 
			padding:10;
			border-radius:5px; 
			border:1px solid #000;
			display: inline-block;
		}
	</style>
</head>
<body>
<div style="margin: 50px auto; width:500px ; text-align: center; background-color: #ccc; height:200px; padding: 50px;">
	Name:<input type="text" id="txt">
	<br/>
	<h2>
	<a href="#"onclick="add('a')">a</a>
	<a href="#"onclick="add('b')">b</a>
	<a href="#"onclick="add('c')">c</a>
	<a href="#"onclick="add('d')">d</a>
	<a href="#"onclick="add('e')">e</a>
	<a href="#"onclick="add('f')">f</a>
	<a href="#"onclick="add('g')">g</a>
	<a href="#"onclick="add('h')">h</a>
	<a href="#"onclick="add('i')">i</a>
	<a href="#"onclick="add('j')">j</a>
	<br/>
	<a href="#"onclick="add('1')">1</a>
	<a href="#"onclick="add('2')">2</a>
	<a href="#"onclick="add('3')">3</a>
	<a href="#"onclick="add('4')">4</a>
	<a href="#"onclick="add('5')">5</a>
	<a href="#"onclick="add('6')">6</a>
	<a href="#"onclick="add('7')">7</a>
	<a href="#"onclick="add('8')">8</a>
	<a href="#"onclick="add('9')">9</a>
	<a href="#"onclick="add('0')">0</a>


</h2>
</div>

</body>
</html>