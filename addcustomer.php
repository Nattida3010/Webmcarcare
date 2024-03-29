<?
ob_start();
session_start();
?>
<!DOCTYPE html>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        crossorigin="anonymous">
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
                <h3 class="name">เพิ่มข้อมูลลูกค้า</h3><br>
                <h6 class="name"> กรุณากรอก  ชื่อ - นามสกุล </h6>
            </div>
        </div>
    </div>

    <form action='addcustomer_chech.php' method='post' id="mainform" name='form' enctype="multipart/form-data">
    <div class="container" style="margin-top :30px;">
            <div class="row text-center">
                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <input type="text" class="form-control" name="fname" id="inputname" placeholder="ชื่อ" required
                        pattern="^[ก-๏]+$"  title="ชื่อต้องเป็นภาษาไทยเท่านั้น" autocomplete="off" autocomplete="off">
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <input type="text" class="form-control" name="lname" id="inputlastname" placeholder="นามสกุล"
                        required pattern="^[ก-๏]+$"  title="นามสกุลต้องเป็นภาษาไทยเท่านั้น"  autocomplete="off">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>

            <div class="row text-center mb-2">
                <div class="col-4">
                    <hr width=80% size=5px;>
                </div>
                <div class="col-4">
                    กรุณากรอก อีเมล์-เบอร์โทรศัพท์-รหัสผ่าน
                </div>
                <div class="col-4">
                    <hr width=100% size=5px;>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <input type="text" class="form-control" name="email" id="email" value!=email
                        placeholder="อีเมล์"   title="กรุณากรอกอีเมล์ให้ถูกต้อง" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off">
                        <i class="fas fa-envelope-square"></i>
                </div>
                    </div>
                </div>
           
                <div class="col-sm-12 mb-2 ">
                    <div class="form-group inputWithIcon">
                        <input type="text" class="form-control" name="phone" id="phone" value!=phone     autocomplete="off"
                            placeholder="เบอร์โทรศัพท์"  placeholder="เบอร์โทรศัพท์" pattern="^\d{10}$"   title="กรุณากรอกเบอร์โทรให้ถูกต้อง" required/>
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                 <center>   <span id="result-search-phone"></span> </center>
                </div>
                <div class="col-sm-12 mb-3">
                    <div class="form-group inputWithIcon">
                        <input type="password" class="form-control" name="password" id="password" placeholder="รหัสผ่าน"
                        pattern=".{8,}" title="รหัสผ่านอย่างน้อย 8 ตัว" autocomplete="off">
                        <i class="fas fa-key"></i>
                    </div>
                </div>
                <center>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn btn-info" name='submit' onclick="next()">ต่อไป </button>
                </div>
                </center>

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
        location.href = ("selectpage.php");

    }
    $(document).ready(function(){
	function load_data(query)
	{
		$.ajax({
			url:"checkphone.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{                
                checkCount(data);
			}
		});
	}
    function checkCount(data){
        var count = data;
        if(count > 0){
            $('#result-search-phone').text('*หมายเลขโทรศัพท์ซ้ำ','center');

            console.log(count);
        }else{

            $('#result-search-phone').text('');
        }

    }
	$('#phone').keyup(function(){
		var search = $(this).val();
        
		if(search != '')
		{
            load_data(search);
            
		}
	});
    });
    </script>
    <script language="javascript">
    function next() {
        console.log("true");
        //  alert("กรุณากรอกข้อมูลรถ");
        //  location.href = "addcar.php"; 

    }
    </script>

</body>

</html>
<?php
 ob_end_flush();
  ?>