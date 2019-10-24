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
session_start();
$fname= $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$email = $_POST['email'];


$sql = "INSERT INTO user (phone, fname, lname, password, status,email)
				VALUES ('$phone','$fname','$lname','$password' ,'Admin','$email')";
$result = mysqli_query($connect,$sql);
if($result){
	echo" <script>
	swal({
	  title: 'สำเร็จ',
	  text: 'ข้อมูลนี้ได้เป็นสมาชิกเรียบร้อยแล้ว',
	  icon: 'success',
	  button: 'OK',
	}).then(function () {
	  window.location.href='home.php';
	}, function (dismiss) {
		return false;
	})
	</script>";
	}
	else{
		
		echo" <script>
 swal({
   title: 'เกิดข้อผิดพลาด',
   text: 'กรุณาลองใหม่อีกครั้ง!',
   icon: 'warning',
   button: 'OK',
 }).then(function () {
   window.location.href='singup.php';
 }, function (dismiss) {
     return false;
 })
 </script>";
	}
mysqli_close($connect);
?>

</body>
</html>