
<?php
session_start();
	$log_in_buddycop = $_SESSION['log_in_buddycop'];
	
	$submit = 'Hostel Registeration';
	
	session_start();
	$_SESSION['submit'] = $submit;
	
//	echo $log_in;
	
/*	if($log_in!="1") 
	 {
			header("location:http://www.ec-jrc.com"); 		
	 }
    else
	{		*/
/*		$Submit = $_POST['Submit'];

//echo $Submit;
	if ($Submit == "Back to Main") {
	header("location:http://www.ec-jrc.com/cyber/main.php");
} elseif ($Submit == "Save New Complaint") {		*/

 define('HOST','mysql.hostinger.in');
 define('USER','u682671774_buddy');
 define('PASS','buddy_cop_ec');
 define('DB','u682671774_buddy');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 //$mysqli = new mysqli("mysql.hostinger.in", "u914356417_cyber", "cyber_cell_ec","u914356417_cyber");
 $read_current_date = $_POST['read_current_date'];
 
 
// singlebyte strings
/*	$today_date = substr($read_current_date, 0, 2);
$today_month = substr($read_current_date, 3, 2);
$today_year = substr($read_current_date, 6, 4);		*/

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






 
 
 //echo $read_current_date;
 
 
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
 
 
// $status = $_POST['status'];
// $investigation_officer = $_POST['investigation_officer'];
// $acemail = $_POST['acemail'];
// $remarks = $_POST['remarks'];
 $sql = "INSERT INTO Hostel_Record (hostel_name,hostel_address,hostel_phone,num_girls,zone,police_station,owner_name,owner_mobile,manager_name,manager_mobile,warden_name,warden_mobile,security_name,security_mobile,CCTV_Camera,compound_wall,sanitation_facility,read_current_date,today_date,today_month,today_year) 
 VALUES('$hostel_name','$hostel_address','$hostel_phone','$num_girls','$zone','$police_station','$owner_name','$owner_mobile','$manager_name','$manager_mobile','$warden_name','$warden_mobile','$security_name','$security_mobile','$CCTV_Camera','$compound_wall','$sanitation_facility','$read_current_date','$today_date','$today_month','$today_year')";
 
 if(mysqli_query($con,$sql)){
	 
//echo "<script type='text/javascript'>alert('submitted successfully!')</script>";	

//alert("Record Saved Successfully."); 


//echo "<script type='text/javascript'>alert('Record Saved Successfully.');</script>";

//session_start();
//	$_SESSION['log_in'] = $log_in;	

header("location:http://www.ec-jrc.com/buddycop/register_new.php"); 	 
	 
 //echo 'successfully registered';
 } else{
	 
//echo "<script type='text/javascript'>alert('failed!')</script>";	

//alert("Record not saved Successfully."); 
//header("location:http://www.cyber-ec.16mb.com/register.php");  


 echo 'oops! Click back button and please try again!';
 }
 mysqli_close($con);
/*}		*/ 		
 ?>		
 



 
 
 
 