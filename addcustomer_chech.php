<?php
include  'config.php';
session_start();
$fname= $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$email = $_POST['email'];


$user = "INSERT INTO user (phone, fname, lname, password, status,email)
				VALUES ('$phone','$fname','$lname','$password' ,'Customer','$email')";



$resultuser = mysqli_query($connect,$user);



if($resultuser){
    
    echo "<script>window.location = 'adddatacar.php'</script>";
    $_SESSION['phone'] = $phone;
}else{
    
    
  
}
           
   mysqli_close($connect);   


?>