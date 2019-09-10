<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
         $("#input").keyup(function(){
            $.ajax({
            	 url : "product.php",
            	 type : "get",
            	 data : {name : a, price : b, detail : c},
            	 success : function(responce){
                          alert(responce);
            	 }

            })
         });
  	});
  </script>
</head>
<body>
<input type="text" id="input">
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