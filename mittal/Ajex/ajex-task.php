<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
         $("#input").keyup(function(){
         	var a = $("#input").val();
            $.ajax({
            	 url : "product.php",
            	 type : "post",
            	 data : {product : a},
            	 success : function(responce){
                       $("#tab").html(responce);
            	 }

            })
         });
  	});
  </script>
</head>
<body>
<input type="text" id="input">
<br />
<br />
<br />
<table cellspacing="0" cellpadding="8" border="1">
	<tr>
		<td>S.no.</td>
		<td>Name</td>
		<td>Price</td>
		<td>Detail</td>
	</tr>
 	<tbody id="tab"></tbody>
</table>
</body>
</html>