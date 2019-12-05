<?
ob_start();
session_start();
?>
<?php
include  'config.php';


$output = '';



if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = 'SELECT user.password,user.phone,user.email,car.car_num,user.fname,user.lname,car.type,car.color,car.size FROM user 
    inner join car on user.phone = car.phone WHERE user.phone = "'.$_POST['query'].'"and user.status = "Customer"';
   
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0){
        
    echo'<div class= "container" > ';
    
    echo '<table  class="table table-sm table-hover">';
    echo '<thead id="colortable" bgcolor = "#6cc1ec">';
    echo  '<center>';
    echo '<tr >';
  
    echo '<th>เลขทะเบียนรถ</th>';
    echo '<th>ชื่อเจ้าของรถ</th>';
    echo '<th>อีเมล์</th>';
    echo '<th>ประเภท/สี</th>';
    echo '<th>ขนาดของรถ</th>';
   
    echo '</tr>';
    echo  '</center>';
    echo '</thead>';
    echo '</div>';


	 while($user = mysqli_fetch_array($result))
	{
        if ($user['size'] == '1')
        $size = 'เล็ก ';
       if ($user['size'] == '2')
        $size = 'ใหญ่ ';
        
        echo  '<center>';
        echo "<tr>";
        echo '<td>' . $user["car_num"] . '</td>';
        echo '<td>' . $user['fname'] . ' ' . $user['lname'] . '</td>';
        echo '<td>' . $user["email"] . '</td>';
        echo '<td>' . $user['type'] . '/' . $user['color'] . '</td>';
        echo '<td>' . $size. '</td>';
   
        echo "</tr>";
        echo  '</center>';
   
    }

    echo "</table>";
    
    }else
    {
     echo '<div class="colors"><center>ไม่พบข้อมูล กรุณาสมาชิก  </center></div>';
 
    }
}
else
{
    // // echo'<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
    // echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>';
    // echo '<script>
 
    // Swal.fire({
    //     type: "error",
    //     title: "ไม่พบข้อมูล ",
    //     text: "กรุณาสมัครสมาชิก ",
       
    //   })
    // </script>';

   

}


echo '<div class="colors" id="red"></div>';
?>
<style>
.colors{
    color : red;
}
</style>
<script language="javascript">
 var a ,query;
        function add() {
            console.log("true");
            location.href = ("addcar.php");
        }
        function order(car) {
            a = car.value
            console.log(car);
            localStorage.setItem('aaa', a);  
            location.href = ("work.php");
            


        }

    </script>

    
<?php
 ob_end_flush();
  ?>