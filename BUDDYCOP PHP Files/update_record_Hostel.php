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
 $hostel_name = $_POST['hostel_name'];
 $hostel_address = $_POST['hostel_address'];
 $hostel_phone = $_POST['hostel_phone'];
 $num_girls = $_POST['num_girls'];
 $zone = $_POST['zone'];
 $police_station =$_POST['police_station'];
 $owner_name = $_POST['owner_name'];
 $owner_mobile = $_POST['owner_mobile'];
 $manager_name = $_POST['manager_name'];
 $manager_mobile = $_POST['manager_mobile'];
 $warden_name = $_POST['warden_name'];
 $warden_mobile = $_POST['warden_mobile'];
 $security_name = $_POST['security_name'];
 $security_mobile = $_POST['security_mobile'];
 $CCTV_Camera = $_POST['CCTV_Camera'];
 $compound_wall = $_POST['compound_wall'];
 $sanitation_facility = $_POST['sanitation_facility']; 
 

if ($ID == "") {
	
header("location:http://www.ec-jrc.com/buddycop/main.php"); 	
} else {	

mysqli_query($conn,"UPDATE Hostel_Record SET hostel_name = '$hostel_name',hostel_address = '$hostel_address',hostel_phone = '$hostel_phone',num_girls = '$num_girls',zone = '$zone',police_station = '$police_station',owner_name = '$owner_name',owner_mobile = '$owner_mobile',manager_name = '$manager_name',manager_mobile = '$manager_mobile',warden_name = '$warden_name',warden_mobile = '$warden_mobile',security_name = '$security_name',security_mobile = '$security_mobile',CCTV_Camera = '$CCTV_Camera',compound_wall = '$compound_wall',sanitation_facility = '$sanitation_facility',read_current_date = '$read_current_date',today_date = '$today_date',today_month = '$today_month',today_year = '$today_year' WHERE ID = '$ID'");




//	$submit = 'IO Registeration';
//	$log_in_buddycop = "1";
//	session_start();
	
//	$_SESSION['submit'] = $submit;
//	$_SESSION['log_in_buddycop'] = $log_in_buddycop;
	

	
header("location:http://www.ec-jrc.com/buddycop/main.php"); 
}		
	?>






