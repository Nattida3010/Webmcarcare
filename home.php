<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="20" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bs-header.css">
    <title>Mcarcare</title>


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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" />
    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                <li class="nav-item dropleft">
                    <a class="nav-link  active" href="report.php">
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


    <div class="container" style="margin-top :80px;">

        <div class="headtopic"></div>
        <h3 class="name">รายการให้บริการรถ</h3>
        <div id="clockbox"></div>
        <button id="addorder" type="button" class="btn btn-info" OnClick="walkin();"
            style="margin-bottom :30px; margin-left: 87%;">เพิ่มรายการรถ
            <i class='fas fa-plus'></i>
        </button>
    </div>


    <div class="head">

        <?php
    include  'config.php';
    $sqlwork = "SELECT w.work_id,w.time,w.car_num,u.fname,u.lname,c.phone,c.color,
    w.wash_engin, w.spray_under, w.wash_asphalt, w.chang_fuel, w.clean_dust,
    c.size,w.level,w.status,w.payment,c.type
    FROM user AS `u` INNER JOIN car AS `c` ON u.phone = c.phone 
    INNER JOIN work AS `w` ON c.car_num = w.car_num
    WHERE w.status = 0 OR w.payment = 0";
    $result = mysqli_query($connect, $sqlwork);
    $num_rows= mysqli_num_rows($result);
    //echo '<script>alert("'.$num_rows.'")</script>';
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
    if($result){
      if($num_rows>0){
      $num = 1;
    while ($user = mysqli_fetch_assoc($result)) {

        $works = '';
      if ($user['wash_engin'] == '1')
        $works .= 'ล้างห้องเครื่อง ';
      if ($user['spray_under'] == '1')
        $works .= 'ล้างอัดฉีดช่วงล้าง ';
      if ($user['clean_dust'] == '1')
        $works .= 'ล้างสีดูดฝุ่น ';
      if ($user['wash_asphalt'] == '1')
        $works .= 'ล้างยางมะตอย ';
      if ($user['chang_fuel'] == '1')
        $works .= 'ถ่ายน้ำเครื่อง ';
        if ($user['size'] == '1')
        $size = 'เล็ก ';
       if ($user['size'] == '2')
        $size = 'ใหญ่ ';
      if ($user['level'] == '0')
        $level = 'รอดำเนินการ';
      else if ($user['level'] == '1')
      $level = 'น้อย';
        else if ($user['level'] == '2')
        $level = 'มาก';
      else
        $level = 'error';
        echo "<tr>";
        echo '<td>' . $user["time"] . '</td>';
        echo '<td>' . $user["car_num"] . '</td>';
        echo '<td>' . $user['fname'] . ' ' . $user['lname'] . '</td>';
        echo '<td>' . $user['phone'] . '</td>';
        echo '<td>' . $user['type'] . '/' . $user['color'] . '</td>';
        echo '<td>' . $works . '</td>';
        echo '<td>' . $level . '</td>';
        echo '<td>' . $size . '</td>';
        if($user['status']==0)
        echo '<td><button type="button"  value = "0" onclick = "return status('.$num.','."'".$user["work_id"]."'".')" id = "status'.$num.'" class="btn btn-outline-secondary">รอดำเนิการ</button></td>';
        else if($user['status']==1)
        echo  '<td><button type="button"  value = "1" onclick = "return status('.$num.','."'".$user["work_id"]."'".')" id = "status'.$num.'" class="btn btn-outline-info">กำลังดำเนิการ</button></td>';
        else if($user['status']==2)
        echo '<td><button type="button"  value = "2" onclick = "return status('.$num.','."'".$user["work_id"]."'".')" id = "status'.$num.'" class="btn btn-success">เรียบร้อย</button></td>';
        else if($user['status']==3)
        echo '<td><button type="button" value = "3" onclick = "return status('.$num.','."'".$user["work_id"]."'".')" id = "status'.$num.'" class="btn btn-danger">ยกเลิก</button></td>';
        else if($user['status']==4)
        echo '<td><button type="button"  value = "4" onclick = "return status('.$num.','."'".$user["work_id"]."'".')" id = "status'.$num.'" class="btn btn-outline-warning">เลื่อนเวลา</butt></td>';
        
        if($user['payment']==0)
        echo '<td><button type="button" value = "0" onclick = "return payment('.$num.','."'".$user["work_id"]."'".')" id = "payment'.$num.'" class="btn btn-outline-warning" >รอการชำระ</button></td>';
        else if($user['payment']==1)
        echo '<td><button type="button" value = "1" onclick = "return payment('.$num.','."'".$user["work_id"]."'".')" id = "payment'.$num.'" class="btn btn-success" >เรียบร้อย</button></td>';
        else if($user['payment']==2)
        echo '<td><button type="button" value = "2" onclick = "return payment('.$num.','."'".$user["work_id"]."'".')" id = "payment'.$num.'"class="btn btn-danger">ยกเลิก</button></td>';
        $num++;
        
      }
    }else
      echo '<tr><td colspan="10">  <h2>ไม่มีรายการบริการในขณะนี้</h2><td></tr>';
    
      echo '</tbody>';
      echo '</table>';
      
    }else{
      echo mysqli_error($connect);
    }
    ?>
    </div>
</body>

<script>
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
<script language="javascript">
function walkin() {
    console.log("true");
    window.location.href = ("selectpage.php");
}
</script>


<script>
function status(work, carnum) {
    var payment = $("#payment" + work).val();
    var status = $("#status" + work).val();
    console.log(work);
    console.log(status);
    if (status == 0) {
        console.log(status);
        swal({
                title: "คุณแน่ใจหรือไหม?",
                text: "ต้องการเปลี่ยนสถานะการบริการ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("เปลี่ยนสถานะสำเร็จ", {
                        icon: "success",
                    });


                    $.post("status.php", {
                            status: 1,
                            carnum: carnum
                        },
                        function(data) {
                            console.log(data);
                            $('#status' + work).attr('class', " btn-outline-info")
                            $('#status' + work).html("กำลังดำเนินการ")
                            $('#status' + work).val("1")
                            //alert('สมัครสมาชิกสำเร็จ');
                        });

                } else {
                    swal("ยกเลิกการเปลียนสถานะแล้ว");
                }
            });


    } else if (status == 1) {
        console.log(status);

        swal({
                title: "คุณแน่ใจหรือไหม?",
                text: "ต้องการเปลี่ยนสถานะการบริการ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("เปลี่ยนสถานะสำเร็จ", {
                        icon: "success",
                    });


                    $.post("status.php", {
                            status: 2,
                            carnum: carnum
                        },
                        function(data) {
                            console.log(data);
                            $('#status' + work).attr('class', "btn btn-success")
                            $('#status' + work).html("เรียบร้อย")
                            $('#status' + work).val("2")
                            //alert('สมัครสมาชิกสำเร็จ');
                        });

                } else {
                    swal("ยกเลิกการเปลียนสถานะแล้ว");
                }
            });

    } else if (status == 3) {
        swal({
                title: "คุณแน่ใจหรือไหม",
                text: "ต้องการเปลี่ยนสถานะการจ่ายเงิน",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                <?php
                include  'config.php';
                $sql = 'UPDATE work  SET payment = '2' WHERE work_id  = '79';'; 
                
                
                    swal("เปลี่ยนสถานะสำเร็จ", {
                        icon: "success",
                    });
                  
                    $.post("payment.php", {
                            payment: payment,
                            carnum: carnum
                        },
                        function(data) {
                            console.log(data);

                            $('#status' + work).attr('class', "btn btn-danger")
                            $('#payment' + work).html("ยกเลิก")
                        });

                } else {
                    swal("ยกเลิกการเปลียนสถานะแล้ว");
                }
            });
    }
}
</script>

<script>


function payment(work, carnum) {

    var payment = $("#payment" + work).val();
    var status = $("#status" + work).val();
    console.log(work);
    
    if (payment == 0 && status == 2) {
        swal({
                title: "คุณแน่ใจหรือไหม",
                text: "ต้องการเปลี่ยนสถานะการจ่ายเงิน",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("เปลี่ยนสถานะสำเร็จ", {
                        icon: "success",
                    });

                    $.post("payment.php", {
                            payment: 1,
                            carnum: carnum
                        },
                        function(data) {
                            $('#payment' + work).attr('class', "btn btn-success")
                            $('#payment' + work).html("เรียบร้อย")
                            $('#payment' + work).val("1")
                        });

                } else {
                    swal("ยกเลิกการเปลียนสถานะแล้ว");
                }
            });
        //


    }
    

else{
    swal("ไม่สามารถเปลี่ยนสถานะได้");

}

}



</script>






<script>
tday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
tmonth = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
    "November", "December");

function GetClock() {
    var d = new Date();
    var nday = d.getDay(),
        nmonth = d.getMonth(),
        ndate = d.getDate(),
        nyear = d.getYear();
    if (nyear < 1000) nyear += 1900;
    var nhour = d.getHours(),
        nmin = d.getMinutes(),
        nsec = d.getSeconds(),
        ap;
    if (nhour == 0) {
        ap = " AM";
        nhour = 12;
    } else if (nhour < 12) {
        ap = " AM";
    } else if (nhour == 12) {
        ap = " PM";
    } else if (nhour > 12) {
        ap = " PM";
        nhour -= 12;
    }
    if (nmin <= 9) nmin = "0" + nmin;
    if (nsec <= 9) nsec = "0" + nsec;
    document.getElementById('clockbox').innerHTML = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + ", " +
        nyear + " " + nhour + ":" + nmin + ":" + nsec + ap + "";
}
window.onload = function() {
    GetClock();
    setInterval(GetClock, 1000);
}
</script>

</html>