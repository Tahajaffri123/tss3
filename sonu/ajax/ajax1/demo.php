<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url: "save.php",
				type: "get",
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
					data : { name : a, age : b, marks : c},
					success : function(response){
						//alert(response);
						$("#tab").html(response);
						$("#name").val("");
						$("#price").val("");
						$("#detail").val("");
					}
				});
			});
		});
	</script>
</head>
<body>
Name <input type="text" id="name"/>

<br/>
<br/>
<br/>
<br/>
<hr />
<table border="1" cellspacing="10" cellpadding="12">
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>price</th>
		<th>detail</th>
	</tr>
	<tbody id="tab"></tbody>
</table>

</body>
</html>