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

    <link rel="stylesheet" type="text/css" href="css/bs-pagepart.css">
    <title>Mcarcare</title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<script>
    (function() {
        $('#mainform').submit(function(event) {
            var form = $('#mainform')[0];
            if (form.checkValidity() === false) {
                event.preventDefault();
            }
            $(this).addClass('was-validated');
        });
    });
</script>

<body>

    <div class="container" style="padding-top :30px;">
        <div class="form-group row">
            <div class="col-sm-4 text-left">
                <button type="submit" class="btn btn-info" OnClick="back();">กลับ</button>
            </div>
            <div class="col-md-12 mb-3 text-center">
                <h3 class="name">ลงทะเบียนเข้าใช้งาน</h3>
            </div>
        </div>
    </div>

    <form action='signup_check.php' method='post' id="mainform" name='form' enctype="multipart/form-data">
        <div class="container" style="margin-top :30px;">
            <div class="row text-center">
                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <input type="text" class="form-control" name="fname" id="inputname" placeholder="ชื่อ" required pattern="^[ก-๏]+$">
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <input type="text" class="form-control" name="lname" id="inputlastname" placeholder="นามสกุล" required pattern="^[ก-๏]+$">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>

            <div class="row text-center mb-2">
                <div class="col-4">
                    <hr width=80% size=5px;>
                </div>
                <div class="col-4">
                    กรุณาสร้างชื่อผู้ใช้ - รหัสผ่าน
                </div>
                <div class="col-4">
                    <hr width=100% size=5px;>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <input type="text" class="form-control" name="phone" id="phone" value!=phone placeholder="เบอร์โทรศัพท์" required pattern="^[a-zA-Z,0-9]+$">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                </div>
                <div class="col-sm-12 mb-3">
                    <div class="form-group inputWithIcon">
                        <input type="password" class="form-control" name="password" id="password" placeholder="รหัสผ่าน" required>
                        <i class="fas fa-key"></i>
                    </div>
                </div>

                <div class="col-sm-12">
                    <button type="submit" class="btn btn btn-info" name='submit'>สมัครสมาชิก</button>
                </div>
            </div>

            <!-- <div class="mt-2">
                <div class="d-flex justify-content-center links">
                    <button type="button" name="button" class="btn turnback_btn" OnClick="Back();" class="ml-2">กลับ</button>
                </div>
            </div> -->

        </div>
    </form>

    <script language="javascript">
        function back() {
            console.log("true");
            window.location.href = ("home.php");

        }
    </script>

</body>

</html>