<!DOCTYPE html>
<html>
<head>
	<title></title>
		
		<style type="text/css">
			div{
				margin: 20px auto;
				padding: 10px;
				width: 800px;
				min-height: 400px;
				background-color: #000576;
				text-align: center;
			}
			.small_img{
				border-radius: 1 solid #000;
				padding: 5px;
			}
		</style>
		<script type="text/javascript">
			function change(a){
				document.getElementById("img").setAttribute("src", a);
			} 
		</script>
</head>
<body>
	<div id="box">
		<img id="img" src="1.jpeg" height="400" width="400"/>
		<hr />
		<img id="img" class="small_img" onmouseover="change('2.jpeg')" src="2.jpeg" height="200" width="200"/>
		<img id="img" class="small_img" onmouseover="change('3.jpeg')" src="3.jpeg" height="200" width="200"/>
		<img id="img" class="small_img" onmouseover="change('4.jpg')" src="4.jpg" height="200" width="200"/>
		<img id="img" class="small_img" onmouseover="change('6.jpg')" src="6.jpg" height="200" width="200"/>
		<img id="img" class="small_img" onmouseover="change('7.jpg')" src="7.jpg" height="200" width="200"/>
		<img id="img" class="small_img" onmouseover="change('13.jpg')" src="13.jpg" height="200" width="200"/>


		
	</div>
</body>
</html>