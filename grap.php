
<?php
include  'config.php';
session_start();
$years = $_POST['years'];
// echo $years;
$mount = $_POST['mount'];
// echo $mount;

  
$grap = 'SELECT *,count(date) FROM work where date LIKE "'.$years.'-'.$mount.'%" and status = "2" and payment = "1" group by date' ;

$result = mysqli_query($connect,$grap);
$numrows = mysqli_num_rows($result);
// echo $numrows;


	$month= '';
  if ($mount == '01')
  $month .= 'มกราคม';
  if ($mount == '02')
  $month .= 'กุมภาพันธ์';
  if ($mount == '03')
  $month .= 'มีนาคม';
  if ($mount == '04')
  $month .= 'เมษายน';
  if ($mount == '05')
  $month .= 'พฤษภาคม';
  if ($mount == '06')
  $month .= 'มิถุนายน';
  if ($mount == '07')
  $month .= 'กรกฎาคม';
  if ($mount == '08')
  $month .= 'สิงหาคม';
  if ($mount == '09')
  $month .= 'กันยายน';
  if ($mount == '10')
  $month .= 'ตุลาคม ';
  if ($mount == '11')
  $month .= 'พฤษจิกายน';
  if ($mount == '12')
  $month .= 'ธันวาคม';


$day = array();
while($row = $result->fetch_assoc()) {
	
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
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "จำนวนรถที่เข้ามาใช้บริการปี <?php echo "$years  เดือน  $month" ; ?> "
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