<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		$("#button").click(function(){
		
           $("#name").val();
           $("#age").val();
           $("#marks").val();

           $.ajax({
                    url : "post.php",
                    type : "post",
                    data : {name : a, age : b, marks : c}
             });
         });
	});
	</script>
</head>
<body>
Name :- <input type="text" id="name">
<br />
<br />
Age :- <input type="text" id="age">
<br />
<br />
marks :- <input type="text" id="marks">
<br />
<br />
<button>OKK</button>
</body>
</html>