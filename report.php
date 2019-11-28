<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="30"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bs-header.css">
    <title>Mcarcare</title>
    <!-- Function -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info" id="tab">
        <a class="navbar-brand" href="home.php">
            <img src="image/font-white1.2.png" alt="logo" class="home_logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <?php
      echo '<form action="search.php" method="post" name="brw_form" style="width:50%">';
      echo ' <div class="form-row ml-sm-5">';
      echo '<input class="form-control mr-sm-3" id="myInput" type="text" placeholder="กรุณากรอกหมายเลขทะเบียนรถ" name="name" autocomplete="off">';
      echo ' <button class="btn btn-outline-light" type="submit" name="submit" value = "ค้นหา">ค้นหา</button>';
      echo ' </div>';
      echo '</form>';
      ?>

            <!-- <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

            <ul class="navbar-nav text-uppercase" id="ml" style="margin-left: 25%;">
                <li class="nav-item mr-sm-3" style="color: white;">
                    <a class="nav-link active" href="report.php">
                        <i class="fas fa-file-alt"></i>
                        รายงาน
                    </a>
                </li>
                <li class="nav-item dropleft">
                    <a class="nav-link  active" href="#" id="navbarReportDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        ข้อมูลของผู้ใช้

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarReportDropdownMenuLink">
                        <a class="dropdown-item" href="reportStaff.php">พนักงาน</a>
                        <a class="dropdown-item" href="reportCustomer.php">ลูกค้า</a>
                    </div>
                </li>
                <li class="nav-item dropleft">
                    <a class="nav-link  active" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cogs"></i>
                        <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="addsingup.php">เพิ่มสมาชิก</a>
                        <a class="dropdown-item" href="login.php">ออกจากระบบ</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="form-group row" style="margin-top :30px;margin-left: 80%;">
        <!-- รายงงาน -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#rang_ModalCenter"
            style="margin-right: 5px;">
            เริ่ม-สิ้นสุด
        </button>
        <!-- รายงงาน -->
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#dayModalCenter"
            style="margin-right: 5px;">
            รายวัน
        </button>
        <!--กราฟ -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#grapModalCenter"
            style="margin-right: 5px;">
            กราฟ
        </button>
    </div>

    <h2 class="name" colspan="10" style="margin-bottom :30px;">รายงานการให้บริการ</h2>


    <!-- Modal  day-->
    <div class="modal fade" id="dayModalCenter" tabindex="-1" role="dialog" aria-labelledby="dayModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title  col-md-3 ml-auto " id="dayModalLongTitle">ค้นหาวันที่</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container" style="padding-top :10px;">
                        <div class="form-group row">
                            <div class="col-md-20 mb-3 text-center">
                                <form action="report.php" method="post" name="brw_form" style="width:50%">
                                    <div class="form-row  ">
                                        <h4> <input class="form-control  mr-sm-3  " style="margin-left: 100%;"
                                                id="datepicker" autocomplete="off" placeholder="เลือกปฏิทิน"> </h4>
                                        <input type="hidden" id="datehidden" name="date"> <br>
                                        <button class="btn btn-outline-warning " style="margin-left: 120%;"
                                            type="submit" name="submit" value="ค้นหา"
                                            onclick="transfer();">ค้นหา</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal rang-->
    <div class="modal fade" id="rang_ModalCenter" tabindex="-1" role="dialog" aria-labelledby="rang_ModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title  col-md-3 ml-auto " id="testModalLongTitle">ค้นหาวันที่</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container" style="padding-top :10px;">
                        <div class="form-group row">
                            <div class="col-md-20 mb-3 text-center">
                                <form action="report.php" method="post" name="brw_form" style="width:50%">
                                    <div class="form-row " style="margin-left: 120px; text-align:center;">
                                        <label for="from">เริ่ม</label>
                                        <input type="text" name="from" class="form-control " id="fromdatepicker"
                                            autocomplete="off" placeholder="เลือกปฏิทิน" style=" margin-bottom :10px;">
                                        <input type="hidden" id="date_from_hidden" name="from">
                                        <label for="to">สิ้นสุด</label>
                                        <input type="text" name="to" class="form-control " id="todatepicker"
                                            autocomplete="off" placeholder="เลือกปฏิทิน">
                                        <input type="hidden" id="date_to_hidden" name="to">
                                        <button class="btn btn-outline-warning "
                                            style="margin-left: 110%; margin-top :30px;" type="submit" name="submit"
                                            value="ค้นหา" onclick="transfer_rang();">ค้นหา</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal grap-->
    <div class="modal fade" id="grapModalCenter" tabindex="-1" role="dialog" aria-labelledby="grapModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title  col-md-3 ml-auto " id="testModalLongTitle">ค้นหาวันที่</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container" style="padding-top :10px;">

                    <div class="form-row " style="margin-left: 120px; text-align:center;">
                            <form action="grap.php" method="post" name="brw_form" target="popup_name" style="width:50%"
                                onSubmit="window.open('','popup_name','left=0,top=0,width=800,height=600,toolbar=no');">
                            
                                <div class="text-center"  >
                                       <div class="form-row " style="margin-left: 10px; text-align:center;">
                                        <label for="from">ปี</label>
                                        <select name="years" class="form-control" style="width: 80%;margin-top :30px; ">
                                                          
                                            <option value="2019">&nbsp;&nbsp;&nbsp;2019</option>
                                            <option value="2020">&nbsp;&nbsp;&nbsp;2020</option>
                                            <option value="2021">&nbsp;&nbsp;&nbsp;2021</option>
                                            <option value="2022">&nbsp;&nbsp;&nbsp;2022</option>
                                            <option value="2023">&nbsp;&nbsp;&nbsp;2023</option>
                                            <option value="2024">&nbsp;&nbsp;&nbsp;2024</option>
                                            <option value="2025">&nbsp;&nbsp;&nbsp;2025</option>
                                            <option value="2026">&nbsp;&nbsp;&nbsp;2026</option>

                                        </select>
                                        </div>
                                        <br>
                                        <div class="form-row " style="margin-left: 10px; text-align:center;">
                                        <label for="from" style="margin-buttom: 90px; ">เดือน</label>
                                    <select name="mount" id= "mount" class="form-control" style="width: 80%;margin-top :10px;">
                                 
                                        <option value='01' href="#">มกราคม</a>
                                        <option value='02' href="#">กุมภาพันธ์</a>
                                        <option value='03' href="#">มีนาคม</a>
                                        <option value='04' href="#">เมษายน</a>
                                        <option value='05' href="#">พฤษภาคม</a>
                                        <option value='06' href="#">มิถุนายน</a>
                                        <option value='07' href="#">กรกฎาคม</a>
                                        <option value='08' href="#">สิงหาคม</a>
                                        <option value='09' href="#">กันยายน</a>
                                        <option value='10' href="#">ตุลาคม</a>
                                        <option value='11' href="#">พฤษจิกายน</a>
                                        <option value='12' href="#">ธันวาคม</a>
                                    </select>
                                    </div>
                                    </div>

                                    <button class="btn btn-outline-warning "
                                        style="margin-left: 110%; margin-top :30px;" type="submit" name="submit"
                                        value="ค้นหา">ค้นหา</button>

                                        
                            </form>
                        </div>
                    </div>
                </div>  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>
            </div>
          
        </div>
    </div>
 
    <?php
include  'config.php';
if(isset($_POST['date'])&&$_POST['date']!='Invalid date'){

  $date = $_POST['date'];
  $sqlsearch = "SELECT w.time,w.car_num,u.fname,u.lname,c.phone,c.color,
  w.wash_engin, w.spray_under, w.wash_asphalt, w.chang_fuel, w.clean_dust,
  c.size,w.level,w.status,w.payment,c.type
  FROM user AS `u` INNER JOIN car AS `c` ON u.phone = c.phone 
  INNER JOIN work AS `w` ON c.car_num = w.car_num WHERE w.time LIKE '%$date%'"; 
}
else{

$date = "";
$sqlsearch = "SELECT w.time,w.car_num,u.fname,u.lname,c.phone,c.color,
w.wash_engin, w.spray_under, w.wash_asphalt, w.chang_fuel, w.clean_dust,
c.size,w.level,w.status,w.payment,c.type
FROM user AS `u` INNER JOIN car AS `c` ON u.phone = c.phone 
INNER JOIN work AS `w` ON c.car_num = w.car_num WHERE w.time LIKE '%$date%'"; 

}
if(isset($_POST['from'])&&$_POST['from']!='Invalid date'&&isset($_POST['to'])&&$_POST['to']!='Invalid date'){
  $date_from = $_POST['from'];
  $date_to=$_POST['to'];
    $sqlsearch = "SELECT w.time,w.car_num,u.fname,u.lname,c.phone,c.color,
    w.wash_engin, w.spray_under, w.wash_asphalt, w.chang_fuel, w.clean_dust,
    c.size,w.level,w.status,w.payment,c.type,w.date
    FROM user AS `u` INNER JOIN car AS `c` ON u.phone = c.phone 
    INNER JOIN work AS `w` ON c.car_num = w.car_num WHERE w.date BETWEEN '$date_from' and '$date_to'";
    // echo $date_to;
}else{
  
  $date_from = "";
  $date_to = "";
    
}
  
  //echo $_POST['date'];
  
  

//echo $_POST['date'];

  $resultsearch = mysqli_query($connect, $sqlsearch);
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
      if ($search['size'] == '1')
      $size = 'เล็ก ';
     if ($search['size'] == '2')
      $size = 'ใหญ่ ';
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
    echo '<td>' . $size. '</td>';
    if($search['status']==0)
      echo '<td><button type="button"  class="btn btn-outline-secondary">รอดำเนิการ</button></td>';
      else if($search['status']==1)
      echo '<td><button type="button"    class="btn btn-outline-info">กำลังดำเนิการ</button></td>';
      else if($search['status']==2)
      echo '<td><button type="button" class="btn btn-success">เรียบร้อย</button></td>';
      else if($search['status']==3)
        echo '<td><button type="button"  class="btn btn-danger">ยกเลิก</button></td>';
        else if($search['status']==4)
        echo '<td><button type="button"  class="btn btn-outline-warning">เลื่อนเวลา</butt></td>';
      if($search['payment']==0)
      echo '<td><button type="button"  class="btn btn-outline-warning">รอการชำระ</button></td>';
      else if($search['payment']==1)
      echo '<td><button type="button" class="btn btn-success">เรียบร้อย</button></td>';
      else if($search['payment']==2)
      echo '<td><button type="button" class="btn btn-danger">ยกเลิก</button></td>';
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


   <!-- ปฏิทินรายวัน -->
    <script>
    $(function() {
        $("#datepicker").datepicker();
        var dateFormat = "mm/dd/yy",
            from = $("#fromdatepicker")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3
            })
            .on("change", function() {
                to.datepicker("option", "minDate", getDate(this));
            }),
            to = $("#todatepicker").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3
            })
            .on("change", function() {
                from.datepicker("option", "maxDate", getDate(this));
            });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });
    //ฟักงชันเปลี่ยนเวลา
    function transfer() {
        var date = document.getElementById("datepicker").value;
        var transfer = moment(date, 'MM/DD/YYYY').format("YYYY-MM-DD");
        document.getElementById("datehidden").value = transfer;
        // return transfer;
        console.log(transfer);
    }

    function transfer_rang() {

        var from = document.getElementById("fromdatepicker").value;
        var to = document.getElementById("todatepicker").value;
        var date_from_transfer = moment(from, 'MM/DD/YYYY').format("YYYY-MM-DD");
        var date_to_transfer = moment(to, 'MM/DD/YYYY').format("YYYY-MM-DD");
        document.getElementById("date_from_hidden").value = date_from_transfer;
        document.getElementById("date_to_hidden").value = date_to_transfer;
        // return transfer;
        console.log(transfer);
    }
    </script>


</body>

</html>