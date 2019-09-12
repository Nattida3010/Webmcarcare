<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Kanit:200,300&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/bs-header.css">
  <title>Mcarcare</title>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-info" id="tab">
    <a class="navbar-brand" href="home.php">
      <img src="image/font-white1.2.gif" alt="logo" class="home_logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


      <?php
      echo '<form action="search.php" method="post" name="brw_form" style="width:50%">';
      echo ' <div class="form-row ml-sm-5">';
      echo '<input class="form-control mr-sm-3" id="myInput" type="text" placeholder="กรุณากรอกหมายเลขทะเบียนรถ" name="name">';
      echo ' <button class="btn btn-outline-light" type="submit" name="submit" value = "ค้นหา">ค้นหา</button>';
      echo ' </div>';
      echo '</form>';
      ?>

      <!-- <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

      <ul class="navbar-nav text-uppercase" id="ml" style="margin-left: 25%;">
        <li class="nav-item mr-sm-3">
          <a class="nav-link" href="report.php">
            <i class="fas fa-file-alt"></i>
            รายงาน
          </a>
        </li>
        <li class="nav-item mr-sm-3">
          <a class="nav-link" href="chat.php">
            <i class="fas fa-bullhorn"></i>
            ประกาศ</a>
        </li>
        <li class="nav-item dropleft">
          <a class="nav-link  active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-cogs"></i>
            <i class="fas fa-caret-down"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="signuppage2.php">เพิ่มสมาชิก</a>
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
    <button type="button" class="btn btn-info" OnClick="walkin();">เพิ่มรายการรถ
      <i class='fas fa-plus'></i>
    </button>
  </div>


  <div class="head">

    <?php
    include  'config.php';
    $sqlwork = 'SELECT customer.Car_num,customer.FName,customer.LName,customer.Phone,customer.Type,customer.Color,work.wash_engin,work.spray_under,work.clean_dust,work.wash_asphalt,work.chang_fuel,work.level,work.size,work.status,work.payment,work.time
    from customer 
    inner join work on customer.Car_num=work.Car_num';
    $querywork = mysqli_query($connect, $sqlwork);

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
    while ($user = mysqli_fetch_array($querywork, MYSQLI_ASSOC)) {
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
      if ($user['level'] == '1')
        $level = 'น้อย';
      else if ($user['level'] == '2')
        $level = 'มาก';
      if ($user['size'] == '1')
        $size = 'เล็ก';
      else if ($user['size'] == '2')
        $size = 'ใหญ่';


      echo "<tr>";
      echo '<td>' . $user["time"] . '</td>';
      echo '<td>' . $user["Car_num"] . '</td>';
      echo '<td>' . $user['FName'] . ' ' . $user['LName'] . '</td>';
      echo '<td>' . $user['Phone'] . '</td>';
      echo '<td>' . $user['Type'] . '/' . $user['Color'] . '</td>';
      echo '<td>' . $works . '</td>';
      echo '<td>' . $level . '</td>';
      echo '<td>' . $size . '</td>';
      echo '<td><select class="custom-select" id="select">
                <option value="1">กำลังดำเนินงาน</option>
                <option value="2">เรียบร้อยแล้ว</option>
                </select> </td>';
      echo '<td><select class="custom-select" id="select">
                <option value="3">รอการชำระเงิน</option>
                <option value="4">เรียบร้อยแล้ว</option>
                </select> </td>';

      echo "</tr>";
    }
    echo '</tbody>';
    echo '</table>';
    ?>
  </div>
</body>
<script language="javascript">
  function change() {
    console.log("true");
    if (confirm("ท่านต้องการเปลี่ยนสถานะใช่หรือไม่")) {

    } else {

    }

  }
</script>
<script>
  $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
  });
</script>

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
  tday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
  tmonth = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

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

    document.getElementById('clockbox').innerHTML = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + ", " + nyear + " " + nhour + ":" + nmin + ":" + nsec + ap + "";
  }

  window.onload = function() {
    GetClock();
    setInterval(GetClock, 1000);
  }
</script>

</html>