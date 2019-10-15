

 
<?php
include  'config.php';
if(isset($_POST['from'])!='Invalid date'&&isset($_POST['to'])!='Invalid date'){
$date_from = $_POST['from'];
$date_to=$_POST['to'];
}else{

$date_from = "";
$date_to = "";
  
}

//echo $_POST['date'];

  $sqldate = "SELECT w.time,w.car_num,u.fname,u.lname,c.phone,c.color,
  w.wash_engin, w.spray_under, w.wash_asphalt, w.chang_fuel, w.clean_dust,
  c.size,w.level,w.status,w.payment,c.type
  FROM user AS `u` INNER JOIN car AS `c` ON u.phone = c.phone 
  INNER JOIN work AS `w` ON c.car_num = w.car_num WHERE w.time BETWEEN '$date_from%' and '$date_to%'";



  $resultsearch = mysqli_query($connect, $sqldate);
  $numrow = mysqli_num_rows($resultsearch);
  echo '<table table-hover class="table">';
  echo '<thead id="colortable">';
  echo '<tr>';
  echo '<th scope="col">วัน/เดือน/ปี</th>';
  echo '<th>เลขทะเบียนรถ</th>';
  echo '<th>ชื่อเจ้าของรถ</th>';
  echo '<th>เบอร์โทรศัพท์</th>';
  echo '<th>ประเภท/สี</th>';
  echo '<th>รายการที่ลูกค้าใช้บริการ</th>';
  echo '<th>ระดับความสกปรก</th>';
  echo '<th>ขนาดของรถ</th>';
  echo '<th>สถานะของรถ</th>';
  echo '<th>ชำระเงิน</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  if ($numrow > 0){
  while ($search= mysqli_fetch_array($resultsearch)) {
    /*  */
    $works = '';
    if ($search['wash_engin'] == '1')
      $works .= 'ล้างห้องเครื่อง ';
    if ($search['spray_under'] == '1')
      $works .= 'ล้างอัดฉีดช่วงล้าง ';
    if ($search['clean_dust'] == '1')
      $works .= 'ล้างสีดูดฝุ่น ';
    if ($search['wash_asphalt'] == '1')
      $works .= 'ล้างยางมะตอย ';
    if ($search['chang_fuel'] == '1')
      $works .= 'ถ่ายน้ำเครื่อง ';
    if ($search['level'] == '1')
      $level = 'น้อย';
    else if ($search['level'] == '2')
      $level = 'มาก';
    else
      $level = 'error';
    /*  */
    echo "<tr>";
    echo '<td>' . $search["time"] . '</td>';
    echo '<td>' . $search["car_num"] . '</td>';
    echo '<td>' . $search['fname'] . ' ' . $search['lname'] . '</td>';
    echo '<td>' . $search['phone'] . '</td>';
    echo '<td>' .$search['type'] . '/' . $search['color'] . '</td>';
    echo '<td>' . $works . '</td>';
    echo '<td>' . $level . '</td>';
    echo '<td>' . $search['size'] . '</td>';
    if($search['status']==0)
      echo '<td><button type="button"  value = "1" onclick = "status('."'".$search["car_num"]."'".')" class="btn btn-outline-warning">กำลังดำเนิการ</button></td>';
      else if($search['status']==1)
      echo '<td><button type="button" class="btn btn-success">เรียบร้อย</button></td>';
      if($search['payment']==0)
      echo '<td><button type="button" value = "1" onclick = "payment('."'".$search["car_num"]."'".')"  class="btn btn-outline-warning">รอการชำระ</button></td>';
      else if($search['payment']==1)
      echo '<td><button type="button" class="btn btn-success">เรียบร้อย</button></td>';
      echo "</tr>";
    echo "</tr>";
  }
 
}
else{
  echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>';
  echo '<script>
  
  Swal.fire({
    type: "error",
    title: "ไม่พบข้อมูล ",
    text: "วันที่ที่ท่านเลือกไม่มีการให้บริการ ",
    
  })
  </script>';
}
echo '</tbody>';
echo '</table>';


?>
 <!-- ปฏิทิน -->
 <script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
    function transfer() {
  
        var from = document.getElementById("fromdatepicker").value;
        var to = document.getElementById("todatepicker").value;
        var transfer = moment(from, 'MM/DD/YYYY').format("YYYY-MM-DD");
        var transfer = moment(to, 'MM/DD/YYYY').format("YYYY-MM-DD");
        document.getElementById("datehidden").value = transfer;
        // return transfer;
        console.log(transfer);
    }
    </script>

</body>

</html>