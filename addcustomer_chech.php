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
session_start();
$fname= $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$email = $_POST['email'];

echo("<script>console.log('PHP: " . $fname . "" . $lname . "" . $phone . "" . $password. "" . $email. "');</script>");
$user = "INSERT INTO user (phone, fname, lname, password, status,email)
				VALUES ('$phone','$fname','$lname','$password' ,'Customer','$email')";



$resultuser = mysqli_query($connect,$user);



if($resultuser){
   

    echo "<script>window.location = 'adddatacar.php'</script>";
    $_SESSION['phone'] = $phone;
}else{
    
    echo"<script>
 swal({
    title: 'ท่านกรอกข้อมูลไม่ถูกต้อง',
    text: 'กรุณากรอกข้อมูลใหม่อีกครั้ง',
   icon: 'warning',
   button: 'OK',
 }).then(function () {
   window.location.href='addcustomer.php';
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