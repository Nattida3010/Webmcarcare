
<?php
include  'config.php';
if(isset($_POST["query"]))
{
	$query = 'SELECT car_num FROM car where car_num = "'.$_POST['query'].'"';
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);
    echo $count;
}
?>
