<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Mcarcare</title>

</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 mb-5 text-center">
                <img src="image/font-white1.2.gif" alt="Mcarcare">
                <br>
                <br>
            </div>
        </div>

        <form action="Login_check.php" method="post">
            <div class="row text-center">
                <div class="col-sm-12 mb-3 ">
                    <div class="form-group">
                        <div class="form-group inputWithIcon">
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="ชื่อผู้ใช้">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group inputWithIcon">
                            <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="รหัสผ่าน">
                            <i class="fas fa-key"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mb-4">
                    <button type="submit" class="btn btn-1" name="login-submit" id="login-submit">เข้าสู่ระบบ</button>
                </div>
            </div>
        </form>
        <form action="signup.php" method="post">
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="d-flex justify-content-center links">
                        หากคุณยังไม่เคยเข้าใช้งานกรุณา
                        <a href="signuppage.php" class="link">สมัครสมาชิก</a>
                        &nbsp; ,คุณ
                        <a href="forgotpassword.php">ลืมรหัสผ่าน?</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>



</html>