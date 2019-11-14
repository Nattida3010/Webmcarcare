<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bs-pagepart.css">
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

</head>

<body>

    <div class="container">
        <div class="form-group row">
            <div class="col-sm-4 text-left">
                <button type="submit" class="btn btn-info" onclick="back()">กลับ</button>
            </div>
            <div class="col-md-12 mb-3 text-center">
                <h3 class="name">เพิ่มข้อมูลรถ</h3>
            </div>
        </div>
    </div>

    <form action='adddatacar_check.php' method='post' id="mainform" name='form' enctype="multipart/form-data">
        <div class="container" style="margin-top :30px;">
            <div class="row text-center">

                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <input type="text" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์" required
                            pattern="^[0-9]+$" value = "<?php echo  $_SESSION["phone"];?>" >
                            
                        <i class="fas fa-phone-volume"></i>
                    </div>
                </div>

                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <input type="text" class="form-control" name="car_num" placeholder="หมายเลขทะเบียนรถ">
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <!-- <input type="text" class="form-control" name="type" placeholder="ประเภทรถ">
                        <i class="fas fa-user"></i> -->
                         <i class="fas fa-car-alt" ></i> 
                    <select name="type"  class="form-control"  > 
                    <option value="0">&nbsp;&nbsp;&nbsp;ประเภทรถ</option>
                        <option value="กะบะ">&nbsp;&nbsp;&nbsp;กระบะ</option>
                        <option value="เก๋ง">&nbsp;&nbsp;&nbsp;เก๋ง</option>
                        <option value="Suv">&nbsp;&nbsp;&nbsp;Suv</option>
                        <option value="มอเตอร์ไซต์">&nbsp;&nbsp;&nbsp;มอเตอร์ไซต์</option>
                    </select>
                    </div>
                </div>
             
                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <!-- <input type="text"feclass="form-control" name="color" placeholder="สีรถ"> -->
                        <i class="fas fa-palette"></i>
                        <select name="color"  class="form-control"  > 
                      <option value="0">&nbsp;&nbsp;&nbsp;สีรถ</option>
                        <option value="ขาว">&nbsp;&nbsp;&nbsp;ขาว</option>
                        <option value="ดำ">&nbsp;&nbsp;&nbsp;ดำ</option>
                        <option value="บรอนซ์เงิน">&nbsp;&nbsp;&nbsp;บรอนซ์เงิน</option>
                        <option value="บรอนซ์ทอง">&nbsp;&nbsp;&nbsp;บรอนซ์ทอง</option>
                        <option value="แดง">&nbsp;&nbsp;&nbsp;แดง</option>
                        <option value="น้ำเงิน">&nbsp;&nbsp;&nbsp;น้ำเงิน</option>
                        <option value="เขียว">&nbsp;&nbsp;&nbsp;เขียว</option>
                        <option value="เหลือง">&nbsp;&nbsp;&nbsp;เหลือง</option>
                        <option value="ม่วง">&nbsp;&nbsp;&nbsp;ม่วง</option>
                        <option value="ส้ม">&nbsp;&nbsp;&nbsp;ส้ม</option>
                        <option value="น้ำตาล">&nbsp;&nbsp;&nbsp;น้ำตาล</option>
                        <option value="ชมพู">&nbsp;&nbsp;&nbsp;ชมพู</option>
                        <option value="ฟ้า">&nbsp;&nbsp;&nbsp;ฟ้า</option>
                    </select>
                    </div>
                </div>

                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <i class="fas fa-truck-pickup"></i>
                        <select name="size"  class="form-control"  > 
                      <option value="0">&nbsp;&nbsp;&nbsp;ขนาด</option>
                        <option  value="1" >&nbsp;&nbsp;&nbsp;เล็ก</option>
                        <option  value="2">&nbsp;&nbsp;&nbsp;ใหญ่</option>
                
                    </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <button type="submit" class="btn btn btn-info" name='submit'>สมัครสมาชิก </button>
                </div>
            </div>
        </div>

    </form>
    <script language="javascript">
    function back() {
        console.log("true");
        location.href = ("member.php");

    }
    </script>

</body>

</html>