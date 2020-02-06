<?php
//	error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	
	if (!$mysqli) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}


session_start();


$from_date = $_SESSION['from_date'];
$to_date = $_SESSION['to_date'];

$from_date_new = $_SESSION['from_date_new'];
$from_month_new = $_SESSION['from_month_new'];
$from_year_new = $_SESSION['from_year_new'];
$to_date_new = $_SESSION['to_date_new'];
$to_month_new = $_SESSION['to_month_new'];
$to_year_new = $_SESSION['to_year_new'];


/*	echo $from_date_new;
echo $from_month_new;
echo $from_year_new;
echo $to_date_new;
echo $to_month_new;
echo $to_year_new;		*/
//echo $statistics_month;
	

$check_from_date_new = $from_date_new;
$check_from_month_new = $from_month_new;
$check_from_year_new = $from_year_new;
$check_to_date_new = $to_date_new;
$check_to_month_new = $to_month_new;
$check_to_year_new = $to_year_new;


/*		echo $check_from_date_new;
echo $check_from_month_new;
echo $check_from_year_new;
echo $check_to_date_new;
echo $check_to_month_new;
echo $check_to_year_new;	*/		

/*
$check_from_date_new = '29';
$check_from_month_new = '8';
$check_from_year_new = '2017';*/

mysqli_query($mysqli, "DELETE FROM Record");

/*
$query = mysqli_query($mysqli,"SELECT hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new'");


//$query = mysqli_query($mysqli,"SELECT hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new'");


//$query = mysqli_query($mysqli,"SELECT hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new'");
					while ($row = mysqli_fetch_array($query))
					{ 
				    //$TEMP_ID = $row['ID'];
					$TEMP_hostel_name = $row['hostel_name'];
					$TEMP_visited_to = $row['visited_to'];
					$TEMP_present_girls = $row['present_girls'];
			        $TEMP_IO_name = $row['IO_name'];
					$TEMP_zone = $row['zone'];
					$TEMP_police_station = $row['police_station'];
					$TEMP_Complaint = $row['Complaint'];
					$TEMP_CCTV_Camera = $row['CCTV_Camera'];
					$TEMP_compound_wall = $row['compound_wall'];
					$TEMP_entry_register = $row['entry_register'];
					$TEMP_Latitude = $row['Latitude'];
					$TEMP_Longitude = $row['Longitude'];
					$TEMP_read_current_date = $row['read_current_date'];	
	
mysqli_query($mysqli,"INSERT into Record (hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date) values ('$TEMP_hostel_name','$TEMP_visited_to','$TEMP_present_girls','$TEMP_IO_name','$TEMP_zone','$TEMP_police_station','$TEMP_Complaint','$TEMP_CCTV_Camera','$TEMP_compound_wall','$TEMP_entry_register','$TEMP_Latitude','$TEMP_Longitude','$TEMP_read_current_date')");
			
	
					//mysqli_query($mysqli,"INSERT into Record (hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date) values ('$TEMP_hostel_name','$TEMP_visited_to','$TEMP_present_girls','$TEMP_zone','$TEMP_police_station','$TEMP_Complaint','$TEMP_CCTV_Camera','$TEMP_compound_wall','$TEMP_entry_register','$TEMP_Latitude','$TEMP_Longitude','$TEMP_read_current_date')");
				
					}

*/
for ($check_from_year_new = $from_year_new; $check_from_year_new <= $check_to_year_new; $check_from_year_new++) 
{
//	echo $check_from_year_new;
	if($check_from_year_new < $to_year_new) 
	{
		for ($check_from_month_new = $from_month_new; $check_from_month_new <= 12; $check_from_month_new++) 
		{
		//	echo $check_from_month_new;
			for ($check_from_date_new = $from_date_new; $check_from_date_new <= 31; $check_from_date_new++) 
			{
			//	echo $check_from_date_new;	
				
				
				// Database code will be here
				$query = mysqli_query($mysqli,"SELECT ID,hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new'");

					while ($row = mysqli_fetch_array($query))
					{ 
				    $TEMP_ID = $row['ID'];
					$TEMP_hostel_name = $row['hostel_name'];
					$TEMP_visited_to = $row['visited_to'];
					$TEMP_present_girls = $row['present_girls'];
					$TEMP_IO_name = $row['IO_name'];
					$TEMP_zone = $row['zone'];
					$TEMP_police_station = $row['police_station'];
					$TEMP_Complaint = $row['Complaint'];
					$TEMP_CCTV_Camera = $row['CCTV_Camera'];
					$TEMP_compound_wall = $row['compound_wall'];
					$TEMP_entry_register = $row['entry_register'];
					$TEMP_Latitude = $row['Latitude'];
					$TEMP_Longitude = $row['Longitude'];
					$TEMP_read_current_date = $row['read_current_date'];
					
					mysqli_query($mysqli,"INSERT into Record (ID,hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date) values ('$TEMP_ID','$TEMP_hostel_name','$TEMP_visited_to','$TEMP_present_girls','$TEMP_IO_name','$TEMP_zone','$TEMP_police_station','$TEMP_Complaint','$TEMP_CCTV_Camera','$TEMP_compound_wall','$TEMP_entry_register','$TEMP_Latitude','$TEMP_Longitude','$TEMP_read_current_date')");

					
					}
				
			}	
			$from_date_new = "1";
		}
		$from_month_new = "1";		//Start from January Again
	} 
	else 
	{
		for ($check_from_month_new = $from_month_new; $check_from_month_new <= $check_to_month_new; $check_from_month_new++) 
		{
		//	echo $check_from_month_new;
			if($check_from_month_new < $to_month_new) 
			{
				for ($check_from_date_new = $from_date_new; $check_from_date_new <= 31; $check_from_date_new++) 
				{
			//	echo $check_from_date_new;	
				
				
				
				// Database code will be here
				$query = mysqli_query($mysqli,"SELECT ID,hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new'");
					while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_ID = $row['ID'];
					$TEMP_hostel_name = $row['hostel_name'];
					$TEMP_visited_to = $row['visited_to'];
					$TEMP_present_girls = $row['present_girls'];
					$TEMP_IO_name = $row['IO_name'];
					$TEMP_zone = $row['zone'];
					$TEMP_police_station = $row['police_station'];
					$TEMP_Complaint = $row['Complaint'];
					$TEMP_CCTV_Camera = $row['CCTV_Camera'];
					$TEMP_compound_wall = $row['compound_wall'];
					$TEMP_entry_register = $row['entry_register'];
					$TEMP_Latitude = $row['Latitude'];
					$TEMP_Longitude = $row['Longitude'];
					$TEMP_read_current_date = $row['read_current_date'];
					
					mysqli_query($mysqli,"INSERT into Record (ID,hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date) values ('$TEMP_ID','$TEMP_hostel_name','$TEMP_visited_to','$TEMP_present_girls','$TEMP_IO_name','$TEMP_zone','$TEMP_police_station','$TEMP_Complaint','$TEMP_CCTV_Camera','$TEMP_compound_wall','$TEMP_entry_register','$TEMP_Latitude','$TEMP_Longitude','$TEMP_read_current_date')");

					
					}
				
				
				
				
				
				}
				$from_date_new = "1";
			} 
			else 
			{
				for ($check_from_date_new = $from_date_new; $check_from_date_new <= $check_to_date_new; $check_from_date_new++) 
				{
			//	echo $check_from_date_new;	
				
				
				// Database code will be here
				$query = mysqli_query($mysqli,"SELECT ID,hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record WHERE today_date = '$check_from_date_new' and today_month = '$check_from_month_new' and today_year = '$check_from_year_new'");
					while ($row = mysqli_fetch_array($query))
					{ 
					$TEMP_ID = $row['ID'];
					$TEMP_hostel_name = $row['hostel_name'];
					$TEMP_visited_to = $row['visited_to'];
					$TEMP_present_girls = $row['present_girls'];
					$TEMP_IO_name = $row['IO_name'];
					$TEMP_zone = $row['zone'];
					$TEMP_police_station = $row['police_station'];
					$TEMP_Complaint = $row['Complaint'];
					$TEMP_CCTV_Camera = $row['CCTV_Camera'];
					$TEMP_compound_wall = $row['compound_wall'];
					$TEMP_entry_register = $row['entry_register'];
					$TEMP_Latitude = $row['Latitude'];
					$TEMP_Longitude = $row['Longitude'];
					$TEMP_read_current_date = $row['read_current_date'];
					
					mysqli_query($mysqli,"INSERT into Record (ID,hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date) values ('$TEMP_ID','$TEMP_hostel_name','$TEMP_visited_to','$TEMP_present_girls','$TEMP_IO_name','$TEMP_zone','$TEMP_police_station','$TEMP_Complaint','$TEMP_CCTV_Camera','$TEMP_compound_wall','$TEMP_entry_register','$TEMP_Latitude','$TEMP_Longitude','$TEMP_read_current_date')");

					
					}						
				}
			}	
			
		}	
	}
}		


// Connection 

	$conn = mysqli_connect("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	$db = mysqli_select_db('excel',$conn);

	$filename = "Buddycop.xls"; // File Name			*

/*if($user_query==1)
{
	echo "<script type='text/javascript'>alert('Excel downloaded sucessfully');</script>";
	header("location:http://www.ec-jrc.com/cyber/main.php");
}
else
{
	echo "<script type='text/javascript'>alert('Excel  downloaded unsucessfully');</script>";
}	*/


// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = mysqli_query($conn,"SELECT ID,hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Record ");
// Write data to file

//echo "Hai";


$flag = false;
while ($row = mysqli_fetch_assoc($user_query)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";			
//	echo "Hello";
}																											
//echo "hello";
	
?>
<?php
//echo "<script type='text/javascript'>alert('Excel downloaded sucessfully');</script>";

//echo("<SCRIPT LANGUAGE='JavaScript'>window.alert('PCR Has Been Updated')</SCRIPT>"); 

//print("<script type=\"text/vbscript\">msgbox(\"Warning, your computer hasn't allocated enough memory to display this message box. Click OK to continue\",16,\"Warning\")\n</script>");


//$message = "Username and/or Password incorrect.\\nTry again.";
//echo "<script type='text/javascript'>alert('$message');</script>";


/*function MyFun()
	{
		alert("hello");
		return false;
	}




MyFun();	*/
?>









			

	 	



