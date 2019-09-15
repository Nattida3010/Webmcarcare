<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


    <link rel="stylesheet" type="text/css" href="css/bs-header.css">
    <title>Mcarcare</title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>

    <?php
    session_start();
    ?>

    <div class="container" style="padding-top :60px;">
        <div class="form-group row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-info" OnClick="back();">กลับ</button>
            </div>
            <div class="col-sm-4">
                <h3 class="name">เพิ่มรายการ</h3>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top :50px;">
        <div class="jumbotron" id="colorjum">
            <form action='work.php' method="post" id="mainform" name='form' enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 pt-0">รายการที่ลูกค้าเลือก</label>
                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="wash_engin" class="custom-control-input" id="defaultCheck1" value="option1">
                            <label class="custom-control-label" for="defaultCheck1">
                                ล้างห้องเครื่อง
                            </label>
                        </div>
                    </div>


                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="spray_under" class="custom-control-input" id="defaultCheck2" value="option2">
                            <label class="custom-control-label" for="defaultCheck2">
                                ล้างอัดฉีดช่วงล้าง
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="clean_dust" class="custom-control-input" id="defaultCheck3" value="option3">
                            <label class="custom-control-label" for="defaultCheck3">
                                ล้างสีดูดฝุ่น
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="wash_asphalt" class="custom-control-input" id="defaultCheck4" value="option4">
                            <label class="custom-control-label" for="defaultCheck4">
                                ล้างยางมะตอย
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="chang_fuel" class="custom-control-input" id="defaultCheck5" value="option5">
                            <label class="custom-control-label" for="defaultCheck5">
                                ล้างยางมะตอย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ระดับความสกปรก</label>
                    <div class="col-sm-1">
                        <div class="custom-control custom-radio" style="margin-top: 8px;">
                            <input type="radio" class="custom-control-input" id="customradioValidation1" name="level" value='2' required="true">
                            <label class="custom-control-label" for="customradioValidation1">
                                มาก
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="custom-control custom-radio" style="margin-top: 8px;">
                            <input type="radio" class="custom-control-input" id="customradioValidation2" name="level" value='1' required="true">
                            <label class="custom-control-label" for="customradioValidation2">
                                น้อย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ขนาดรถ</label>
                    <div class="col-sm-1">
                        <div class="custom-control custom-radio" style="margin-top: 8px;">
                            <input type="radio" class="custom-control-input" id="customradioValidation3" name="size" value='2' required="true">
                            <label class="custom-control-label" for="customradioValidation3">
                                มาก
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="custom-control custom-radio" style="margin-top: 8px;">
                            <input type="radio" class="custom-control-input" id="customradioValidation4" name="size" value='1' required="true">
                            <label class="custom-control-label" for="customradioValidation4">
                                น้อย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col pad" style="text-align: center;">
                        <button type="submit" class="btn btn-success" value="Submit">บันทึก</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



</body>
<script>
    function back() {
        console.log("true");
        window.location.href = ("home.php");

    }
</script>

</html>