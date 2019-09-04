<?php
$con = mysqli_connect("localhost", "root", "password", "tss3");
$que = "SELECT * FROM student";
$obj = mysqli_query($con, $que);

$str="";
while($data=mysqli_fetch_assoc($obj))
{
	$color = str_shuffle("1234567890ABCDEF");
	$color = substr($color, 0, 6);



	$str .= "['".strtoupper($data['name'])."', ".$data['marks'].", '#".$color."'],";
}
$new_str = rtrim($str, ",");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	  <script type="text/javascript">
	    google.charts.load("current", {packages:['corechart']});
	    google.charts.setOnLoadCallback(drawChart);
	    function drawChart() {
	      var data = google.visualization.arrayToDataTable([
	        ["Element", "marks", { role: "style" } ],

	        <?php echo $new_str; ?>
	        
	      ]);

	      var view = new google.visualization.DataView(data);
	      view.setColumns([0, 1,
	                       { calc: "stringify",
	                         sourceColumn: 1,
	                         type: "string",
	                         role: "annotation" },
	                       2]);

	      var options = {
	        title: "Student marks",
	        width: 600,
	        height: 400,
	        bar: {groupWidth: "95%"},
	        legend: { position: "none" },
	      };
	      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
	      chart.draw(view, options);
	  }
	  </script>
</head>
<body>

	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
</body>
</html>