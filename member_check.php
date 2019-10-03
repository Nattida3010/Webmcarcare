<?php
include  'config.php';
session_start();

$sql = 'SELECT * FROM user WHERE phone ="'.$_POST['phone'].'"';
$result = mysqli_query($connect,$sql);

if($result){
    
  $numrows = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);
  $phonenumber=$row['phone'];
  if($numrows<=0){
      echo "<script>
      alert('หมายเลขทะเบียนนี้ยังไม่เป็นสมาชิก กรุณาสมัครสมาชิก');
      window.location='addcustomer.php';
      </script>";
   
  }else{
   


      echo '<div id="myform" style="display:none">';
      include  'config.php';
      $sqlwork = 'SELECT user.phone,car.car_num,user.fname,user.lname,car.types,car.color,car.size
      from user
      inner join car  on user.phone=car.phone';
      $result = mysqli_query($connect,$sqlwork); 
      
      echo '<table table-hover class="table">';
          echo '<thead id="colortable" bgcolor = "#6cc1ec">';
          echo '<tr >';
          echo '<th>เบอร์โทรศัพท์</th>';
          echo '<th>เลขทะเบียนรถ</th>';
          echo '<th>ชื่อเจ้าของรถ</th>';
          echo '<th>ประเภท/สี</th>';
          echo '<th>ขนาดของรถ</th>';
          echo '</tr>';
          echo '</thead>';
      
          echo '<tbody>';
          while ($user = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo '<td>' . $user["phone"] . '</td>';
          echo '<td>' . $user["car_num"] . '</td>';
          echo '<td>' . $user['fname'] . ' ' . $user['lname'] . '</td>';
          echo '<td>' . $user['types'] . '/' . $user['color'] . '</td>';
          echo '<td>' . $user['size'] . '</td>';
          echo "</tr>";
      }
      echo '</tbody>';
      echo '</table>';
     
     echo '</div>';
  }
  

}
         
 mysqli_close($connect);
        
   ?>


</html>