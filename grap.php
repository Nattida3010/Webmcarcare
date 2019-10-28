<?php
include  'config.php';
session_start();
$years = $_POST['years'];
// echo $years;
$mount = $_POST['mount'];
// echo $mount;
  
$grap = 'SELECT *,count(date) FROM work where date LIKE "'.$years.'-'.$mount.'%"group by date';

$result = mysqli_query($connect,$grap);
$numrows = mysqli_num_rows($result);
// echo $numrows;

$day = array();
while($row = $result->fetch_assoc()) {
    // echo '<br>';
    // echo $row["count(date)"];
    // echo $row["date"];

    $rang = array("y"=>$row["count(date)"], "label"=>$row["date"]);
    array_push($day,$rang);
}
//print_r($day);

mysqli_close($connect);
?>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "จำนวนรถของปี <?php echo "$years  เดือน  $mount" ; ?> "
	},
	axisY: {
		title: "จำนวนรถในแต่ละวัน "
	},
	data: [{
		type: "line",
		yValueFormatString: "#,##0.## คัน",
		dataPoints: <?php echo json_encode($day, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>    