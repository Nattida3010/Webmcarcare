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
  <link rel="stylesheet" type="text/css" href="css/bs-type.css">

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
    echo' <div class="form-row ml-sm-5">';
    echo '<input class="form-control mr-sm-3" id="myInput" type="text" placeholder="กรุณากรอกหมายเลขทะเบียนรถ" name="name">';
    echo ' <button class="btn btn-outline-light" type="submit" name="submit" value = "ค้นหา">ค้นหา</button>';
    echo' </div>';
    echo '</form>';
    ?>

    <!-- <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

      <ul class="navbar-nav text-uppercase" id="ml" style="margin-left: 25%;" >
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
          <a class="nav-link  active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
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
  </div>
  <div class="col-lg-12 text-center" id="typebutton">
  <div class="btn-group" role="group" aria-label="Button group with nested dropdown text-center">
    <button id="free" type="button" class="btn btn-1" OnClick="member();">สมาชิก</button>
    <button id="paid" type="button" class="btn btn-2" OnClick="newmember();">ลูกค้าใหม่</button>
  </div>
  </div>

</body>
<script language="javascript">
  function newmember() {
    console.log("true");
    window.location.href = ("addcustomer.php");
  }
</script>
<script language="javascript">
  function member() {
    console.log("true");
    window.location.href = ("memberpage.php");
  }
</script>

</html>