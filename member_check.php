<?php
include  'config.php';
session_start();

$sql = 'SELECT * FROM user WHERE phone ="'.$_POST['phone'].'"';
$result = mysqli_query($connect,$sql);

// $objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($result){
    
    $numrows = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $carnumber=$row['phone'];
    if($numrows<=0){
        echo "<script>
        alert('เบอร์โทรศัพท์นี้ยังไม่เป็นสมาชิก กรุณาสมัครสมาชิก');
        window.location='addcustomer.php';
        </script>";
    }else{
        // $_SESSION['phone_selected']=$_POST['phone'];
        // echo "<script>
        // alert('พบผู้ใช้".$phone."');
        // window.location='work.php';
        // </script>";
        
    }
    
  
}
           
   mysqli_close($connect);
   ?>