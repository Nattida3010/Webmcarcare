<?php
include  'config.php';
session_start();
$fname= $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$password = $_POST['password'];
// echo $fname;
// echo $lname;
// echo $phone;
// echo $password;

$sql = "INSERT INTO user (phone, fname, lname, password, status)
				VALUES ('$phone','$fname','$lname','$password' ,'Admin')";
$result = mysqli_query($connect,$sql);
if($result){
	echo "<script type='text/javascript'>";
	echo "alert('สมัครสมาชิกสำเร็จ');";
	echo "window.location = 'home.php'; ";
	echo "</script>";
	}
	else{
		echo mysqli_error($connect);
	// echo "<script type='text/javascript'>";
	// echo "alert('เกิดข้อผิดพลาด โปรดทำการสมัครใหม่อีกครั้ง".mysqli_error($connect)."');";
	// echo "window.location = 'singup.php'; ";
	// echo "</script>";
	}
mysqli_close($connect);
?>