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
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>

<body>
    <div class="container" style="padding-top :30px;">
        <div class="form-group row">
            <div class="col-md-12 mb-3 text-center">
                <h3 class="name">กรุณากรอกหมายเลขโทรศัพท์</h3>
                <h4 class="name">ตรวจสอบข้อมูลลูกค้า</h4>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top :30px;">
        <div class="row text-center">
            <div class="col-sm-12 mb-2 ">
            
                    <?php
                    // echo '<form action="member_check.php" method="post" name="brw_form" >';
                     echo '<form  method="post" name="brw_form">';
                    echo ' <div class="form-group inputWithIcon">';
                    echo '<input   class="form-control" type="text" name="search_text" id="search_text"  placeholder="หมายเลขโทรศัพท์"autocomplete="off">';
    
                    echo '<i class="fas fa-envelope"></i>';  
                    echo '</div>';
                    echo '<div class="col-sm-12 mt-4">';
                    echo '<button class="btn btn btn-warning" type="button" name="button"  OnClick="back();" class="ml-2">กลับ</button>';
    
                    echo '</div>';
                    echo '</form>';
                    ?>
                    
            </div>
        </div>
    </div>
    
    <div id="result"></div>
		</div>
		<div style="clear:both"></div>

 <script>
$(document).ready(function(){
	function load_data(query)
	{
		$.ajax({
			url:"Customer.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();5 
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>



<script language="javascript">
        function back() {
            console.log("true");
            location.href = ("home.php");
        }
       
    </script>
</html>