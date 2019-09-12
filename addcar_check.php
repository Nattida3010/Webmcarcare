
<?php
include  'config.php';
session_start();
 $car_num = $_POST['car_num'];
$phone = $_POST['phone'];
$types = $_POST['types'];
$color = $_POST['color'];
$size = $_POST['size'];

echo("<script>console.log('PHP: " . $car_num . "" . $phone . "" . $types . "" . $color. "" . $size. "');</script>");

$car = "INSERT INTO car(car_num,color,phone,types,size)
		VALUES ('$car_num','$color','$phone','$types', '$size')";
		

 $resultcar = mysqli_query($connect,$car);


	if($resultcar){

	echo "<script>window.location = 'memberpage.php'</script>";
	}
	else{

	}
mysqli_close($connect);




?>

