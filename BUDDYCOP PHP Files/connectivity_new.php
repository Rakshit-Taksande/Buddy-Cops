<?php 


session_start();
$submit = $_POST['submit'];
$_SESSION['submit'] = $_POST[submit];


echo $submit;

if($submit == 'Buddycop')
{
header("location:http://www.ec-jrc.com/buddycop/buddycop.php"); 	
}
 

?>
