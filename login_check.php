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
 echo "  <script>
		alert('กรุณาตรวจสอบ ชื่อผู้ใช้หรือรหัสผ่าน');
		window.location  = 'login.php';
		</script>";



}else{
	$_SESSION["ID"] = $objResult["ID"];
			session_write_close();
			header("location:home.php");
			}
		
mysqli_close($connect);
?>