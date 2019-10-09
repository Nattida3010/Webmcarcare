<?php
include  'config.php';
session_start();
$car_num = $_POST['car_num'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$color = $_POST['color'];
$size = $_POST['size'];

echo("<script>console.log('PHP: " . $car_num . "" . $phone . "" . $type . "" . $color. "" . $size. "');</script>");

$car = "INSERT INTO car(car_num,color,phone,type,size)
		VALUES ('$car_num','$color','$phone','$type', '$size')";
		

 $resultcar = mysqli_query($connect,$car);


	if($resultcar){

	echo "<script>window.location = 'member.php'</script>";
	}
	else{

	}
mysqli_close($connect);




?>