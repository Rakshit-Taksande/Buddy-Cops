<?php
session_start();
	$log_in_buddycop = $_SESSION['log_in_buddycop'];
	
	$read_current_date = date('d-m-Y');
	
	$today_date = substr($read_current_date, 0, 1);
	if($today_date == "0") 
	{
		$today_date = substr($read_current_date, 1, 1);
	} else {
		$today_date = substr($read_current_date, 0, 2);
	}	
$today_month = substr($read_current_date, 3, 1);
	if($today_month == "0") 
	{
		$today_month = substr($read_current_date, 4, 1);
	} else {
		$today_month = substr($read_current_date, 3, 2);
	}
$today_year = substr($read_current_date, 6, 4);
	
	

	$servername = "mysql.hostinger.in";
	$username = "u682671774_buddy";
	$password = "buddy_cop_ec";
	$db="u682671774_buddy";


//create connection

	$conn = new mysqli($servername, $username, $password,$db);
	


if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
    } 
//query

//session_start();


//$ID = $_POST['ID'];
//$_SESSION['ID'] = $_POST[ID];



$ID = $_REQUEST['ID'];
$_SESSION['ID'] = $_REQUEST[ID];

//echo $ID;

//	$ID = $_SESSION['ID'];
	
 $IO_name = $_POST['IO_name'];
 $buckle_no = $_POST['buckle_no'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $zone = $_POST['zone'];
 $police_station =$_POST['police_station'];
 
 
 
 

if ($ID == "") {
	
header("location:http://www.ec-jrc.com/buddycop/main.php"); 	
} else {	

mysqli_query($conn,"UPDATE IO_Record SET IO_name = '$IO_name',buckle_no = '$buckle_no',phone = '$phone',email = '$email',zone = '$zone',police_station = '$police_station',read_current_date = '$read_current_date',today_date = '$today_date',today_month = '$today_month',today_year = '$today_year' WHERE ID = '$ID'");




//	$submit = 'IO Registeration';
//	$log_in_buddycop = "1";
//	session_start();
	
//	$_SESSION['submit'] = $submit;
//	$_SESSION['log_in_buddycop'] = $log_in_buddycop;
	

	
header("location:http://www.ec-jrc.com/buddycop/main.php"); 
}		
	?>






