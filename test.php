<form name="forgot" method="post" action="<?php $_SERVER['PHP_SELF'];?>"> 
<p><label for="email">Email:</label> 
<input name="email" type="text" value="" /> 
</p> 
<input type="submit" name="submit" value="submit"/> 
<input type="reset" name="reset" value="reset"/> 
</form> 
<?php 
if(isset($_POST['submit'])) 
{ 
    include  'config.php';
$email = $_POST['email']; 

$sql= "SELECT * FROM user WHERE email  ='.$email.'"; 
$query = mysql_query($sql); 
if(!$query)  
    { 
    die(mysql_error()); 
    } 
if(mysql_affected_rows() != 0) 
    { 
$row=mysql_fetch_array($query); 
$password=$row["password"]; 
$email=$row["email"]; 
$subject="Verbazon.net - Password Request"; 
$header="From: webmaster@verbazon.net"; 
$content="Your password is ".$password; 
mail($email, $subject, $content, $header);  
print "An email containing the password has been sent to you"; 
    } 
else  
    { 
    echo("no such login in the system. please try again."); 
    } 
} 
?>