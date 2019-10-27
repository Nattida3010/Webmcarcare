<?php
include  'config.php';
session_start();
$years = $_POST['years'];
echo $years;
$mount = $_POST['mount'];
echo $mount;
  
$grap = 'SELECT *,count(date) FROM work where date LIKE "'.$years.'-'.$mount.'%"group by date';

$result = mysqli_query($connect,$grap);
$numrows = mysqli_num_rows($result);
echo $numrows;
//mysqli_close($connect);
$day = array();
while($row = $result->fetch_assoc()) {
    echo '<br>';
    echo $row["count(date)"];
    echo $row["date"];

    $rang = array("y"=>$row["count(date)"], "label"=>$row["date"]);
    array_push($day,$rang);
}
//print_r($day);
$dataPoints = array(
	array("y" => 25, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
);

?>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
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