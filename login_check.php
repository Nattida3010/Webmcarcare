<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Document</title>
</head>
<body>
	

<?php
include  'config.php';
session_start();

$sql = 'SELECT * FROM user WHERE phone ="'.$_POST['phone'].'" AND password = "'.$_POST['password'].'"'; 
$result = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($result);
$objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($numrows==0){
 
//  echo "  <script>
// 		alert('กรุณาตรวจสอบ ชื่อผู้ใช้หรือรหัสผ่าน');
// 		window.location  = 'login.php';
// 		</script>";


echo" <script>
 swal({
   title: 'ไม่พอข้อมูล',
   text: 'กรุณาลองใหม่อีกครั้ง!',
   icon: 'warning',
   button: 'OK',
 }).then(function () {
   window.location.href='login.php';
 }, function (dismiss) {
     return false;
 })
 </script>";







}else{

	
	$_SESSION["ID"] = $objResult["ID"];
			session_write_close();
			header("location:home.php");



			}
		
mysqli_close($connect);
?>


</body>
</html>