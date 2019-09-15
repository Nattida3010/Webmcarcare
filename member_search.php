<?php
include  'config.php';
session_start();

$output = '';



if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = 'SELECT user.phone,car.car_num,user.fname,user.lname,car.types,car.color,car.size FROM user inner join car on user.phone = car.phone WHERE user.phone = "'.$_POST['query'].'"';
}
else
{
    echo "<script>
    alert('หมายเลขทะเบียนนี้ยังไม่เป็นสมาชิก กรุณาสมัครสมาชิก');
    window.location='member.php';
    </script>";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    echo '<table table-hover class="table">';
    echo '<thead id="colortable" bgcolor = "#6cc1ec">';
    echo '<tr >';
    echo '<th>เบอร์โทรศัพท์</th>';
    echo '<th>เลขทะเบียนรถ</th>';
    echo '<th>ชื่อเจ้าของรถ</th>';
    echo '<th>ประเภท/สี</th>';
    echo '<th>ขนาดของรถ</th>';
    echo '<th>รายการ</th>';
    echo '</tr>';
    echo '</thead>';
	// $output += '<div class="table-responsive">'
    //  echo '<table table-hover class="table">';
    // echo '<thead id="colortable" bgcolor = "#6cc1ec">';
    // echo '<tr >';
    // echo '<th>เบอร์โทรศัพท์</th>';
    // echo '<th>เลขทะเบียนรถ</th>';
    // echo '<th>ชื่อเจ้าของรถ</th>';
    // echo '<th>ประเภท/สี</th>';
    // echo '<th>ขนาดของรถ</th>';
    // echo '</tr>';
    // echo '</thead>';
    // echo '<tbody>';

    // for (int i =0 ,i< mysqli_num_rows($result),i++ ){

	 while($user = mysqli_fetch_array($result))
	{
        echo "<tr>";
        echo '<td>' . $user["phone"] . '</td>';
        echo '<td>' . $user["car_num"] . '</td>';
        echo '<td>' . $user['fname'] . ' ' . $user['lname'] . '</td>';
        echo '<td>' . $user['types'] . '/' . $user['color'] . '</td>';
        echo '<td>' . $user['size'] . '</td>';
        echo '<td><button class="btn btn btn-success"  type="button" value = "'. $user["car_num"] .'" name="carnum1" id="carnum1" OnClick="order(this);" class="ml-2" >เพิ่มรายการบริการ</button></td>';
        echo "</tr>";
        // $_SESSION['car_selected'] = $user["car_num"];
	
    // }
}

    // echo $output;
    echo "</table>";
    echo '<center><button class="btn btn btn-primary" type="button" name="button"  OnClick="add();" class="ml-2" >เพิ่มข้อมูลรถ</button></center>';
    
}
else
{
     echo '<div class="colors"><center>ไม่พบข้อมูล กรุณาสมาชิก  </center></div>';
    
  
}

echo '<div class="colors" id="re"></div>';
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
        function order(b) {
            a = b.value
            console.log(a);
            localStorage.setItem('aaa', a);  
            location.href = ("work.php");
            // $.ajax({
			// url:"work.php?value="+a,
			// method:"GET",
			// data:{query:a},
			// success:function(data)
			// {


                // $('#re').html(data);
               
				
              
		// 	}   
		// });
// location.href = ("work.php");


        }

    </script>