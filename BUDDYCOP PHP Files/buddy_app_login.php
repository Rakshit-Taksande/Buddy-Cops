<?php
define('HOST','mysql.hostinger.in');
define('USER','u682671774_buddy');
define('PASS','buddy_cop_ec');
define('DB','u682671774_buddy');
 
$con = mysqli_connect(HOST,USER,PASS,DB);

$username = $_POST['username'];
$password = $_POST['password'];

//$username = 'cop';
//$password = 'cop';




 
$sql = "select * from  Login_App where USERNAME='$username' and PASSWORD='$password'";
 
$res = mysqli_query($con,$sql);
 
$check = mysqli_fetch_array($res);
 
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
 
mysqli_close($con);
?>

