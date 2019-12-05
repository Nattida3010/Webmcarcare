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
     $query = 'SELECT * FROM user   where status IN ("Admin" , "Staff")   And phone =  "'.$_POST['query'].'"';
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0){
    
    echo'<div class= "container" > ';
    echo '<table  class="table ">';
    echo '<thead id="colortable" bgcolor = "#6cc1ec" >';
    echo  '<center>';
    echo '<tr >';
    echo '<th>เบอร์โทรศัพท์</th>';
    echo '<th>ชื่อพนักงาน</th>';
    echo '<th>อีเมล์</th>';
    echo '<th>รหัสผ่าน</th>';
    echo '<th>สถานะ</th>';
    echo '</tr>';
    echo  '</center>';
    echo '</thead>';
  
    echo '</div>';

	 while($user = mysqli_fetch_array($result))
	{ 
        if ($user['status'] == 'Admin')
        $status = 'พนังงานดูแลระบบ';
        else if ($user['status'] == 'Staff')
        $status = 'พนักงานภายในร้าน ';
        echo  '<center>';
        echo "<tr>";
        echo '<td>' . $user["phone"] . '</td>';
        echo '<td> ' . $user['fname'] . ' ' . $user['lname'] . '</td>';
        echo '<td>' . $user['email'] . '</td>';
        echo '<td>' . $user['password'] . '</td>';
        echo '<td>' . $status . '</td>';
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