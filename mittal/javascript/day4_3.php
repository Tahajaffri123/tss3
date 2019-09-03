<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box
		{
			
			width: 500px;
			background-color: #ccc;
			min-height: 200px; 
			margin: 20px auto;
			padding:10px;
			text-align: center;
		}
	</style>
	<script type="text/javascript">
		function add()
		{
			var tr=document.createElement("tr");

			var td1 = document.createElement("td");
			var td2 = document.createElement("td"); 
			var td3 = document.createElement("td"); 
			var td4 = document.createElement("td"); 

			var input1 = document.createElement("input");
			var input2 = document.createElement("input");

            input1.setAttribute("type","text");
            input1.setAttribute("name","name[]");

            input2.setAttribute("type","text");
            input2.setAttribute("name","age[]");

            td1.innerHTML="Name";
            td2.appendChild(input1);
            td3.innerHTML="Age";
            td4.appendChild(input2);

            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);

            document.getElementById("tab").appendChild(tr);

		}
	</script>
</head>
<body>
<div id="box">
	<h3>ADD STUDENT FROM</h3>
	<button onclick="add()">Add More</button>
	<br />
	<br />
	<form action="save.php" method="post">
		<table id="tab">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name[]"></td>
				<td>Age</td>
				<td><input type="text" name="age[]"></td>
			</tr>
		</table>
		<br />
		<input type="submit" value="Save">
	</form>
</div>
</body>
</html>