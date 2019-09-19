<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$.ajax({
				    url : "save.php",
					type : "get",
					success : function(response){
					$("#tab").html(response);

				}
			});

			$("button").click(function(){
				var a = $("#name").val();
				var b = $("#age").val();
				var c = $("#marks").val();

				$.ajax({
					url : "save.php",
					type : "post",
					data : { name : a, age : b, maeks: c},
					success : function(response){
						$("#tab").html(response);
						$("#name").val("");
						$("#age").val("");
						$("marks").val("");
					}
				});
			});
		});
	</script>
</head>
<body>
Name <input type="text" id="name">
<br/>
<br/>
Age <input type="text" id="age">
<br/>
<br/>
Marks <input type="text" id="marks">
<br/>
<br/>
<button>Save</button>
<hr/>
<table border="1" cellspecing="0" cellpadding="2">
	<tr>
		<th>S.No</th>
		<th>>Name</th>
		<th>Age</th>
		<th>Marks</th>
	</tr>
	<tbody id="tab"></tbody>

</table>
</body> 
</html>