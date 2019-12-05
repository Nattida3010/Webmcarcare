
<?
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Mcarcare</title>
</head>
<body>
	
<?php
include  'config.php';
 
$car_num = $_POST['car_num'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$color = $_POST['color'];
$size= $_POST['size'];

echo("<script>console.log('PHP: " . $car_num . "" . $phone . "" . $type . "" . $color. "" . $size. "');</script>");

$car = "INSERT INTO car (car_num,color,phone,type,size)
		VALUES ('$car_num','$color','$phone','$type', '$size')";
		

 $resultcar = mysqli_query($connect,$car);


	if($resultcar){

				echo" <script>
			swal({
			  title: 'สำเร็จ',
			  text: 'เพิ่มข้อมูลรถเรียบร้อยแล้ว',
			  icon: 'success',
			  button: 'OK',
			}).then(function () {
			  window.location.href='selectpage.php';
			}, function (dismiss) {
				return false;
			})
			</script>";
			

	
	}
	else{

		echo"<script>
		swal({
		  title: 'ท่านกรอกข้อมูลไม่ถูกต้อง',
		  text: 'กรุณากรอกข้อมูลใหม่อีกครั้ง',
		  icon: 'warning',
		  button: 'OK',
		}).then(function () {
		  window.location.href='addcar.php';
		}, function (dismiss) {
			return false;
		})
		</script>";
	   }

	
	
mysqli_close($connect);

?>
</body>
</html>

<?php
 ob_end_flush();
  ?>