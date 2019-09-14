<?php
include  'config.php';
session_start();
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];
$password = $_POST['password'];



$user= "INSERT INTO user (status, FName, LName, Phone, password)
                VALUES ('Customer','$fname', '$lname', '$phone', '$password')";



$resultuser = mysqli_query($connect,$user);



if($resultuser){
    
    echo "<script>window.location = 'adddatacar.php'</script>";
}else{
    
    
  
}
           
   mysqli_close($connect);   


?>