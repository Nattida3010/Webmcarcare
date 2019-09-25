<?php
include  'config.php';
$status = $_POST['status'];
$carnum = $_POST['carnum'];


// echo "<script>console.log('".$status."' );console.log('".$carnum."')</script>";
$sql = 'UPDATE work SET status  = 1 WHERE car_num  = "'.$carnum.'"';

$result = mysqli_query($connect,$sql);

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('สมัครสมาชิกสำเร็จ');";

	echo "</script>";
	}
	else{
		echo mysqli_error($connect);
	
	}
mysqli_close($connect);    

?>