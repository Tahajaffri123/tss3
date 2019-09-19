<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
		
		


<h1>Getting Text Content</h1>

<h2 id="01"><img src="n1.jpg"></h2>
<h2 id="02"><img src="n2.jpg"></h2>
<h2 id="03"><img src="n.jpg"></h2>

<p id="demo"></p>

<script>
$(document).ready(function() {
  var myElement = $("#02");
  var myText = myElement.text();
  $("#demo").text(myText); 
});
</script>

</body>
</html>
