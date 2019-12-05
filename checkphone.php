
<?php
include  'config.php';
if(isset($_POST["query"]))
{
	$query = 'SELECT phone FROM user where phone = "'.$_POST['query'].'"';
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);
    echo $count;
}
?>
