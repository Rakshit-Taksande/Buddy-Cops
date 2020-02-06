<?php
//	error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	
	if (!$mysqli) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}



session_start();
$zone = $_SESSION['zone'];
$police_station = $_SESSION['police_station'];
$IO_name = $_SESSION['IO_name'];
$hostel_name = $_SESSION['hostel_name'];

$from_date = $_SESSION['from_date'];
$to_date = $_SESSION['to_date'];
//$statistics_month = $_SESSION['statistics_month'];

// singlebyte strings
$from_date_new = substr($from_date, 0, 1);
	if($from_date_new == "0") 
	{
		$from_date_new = substr($from_date, 1, 1);
	} else {
		$from_date_new = substr($from_date, 0, 2);
	}	

$from_month_new = substr($from_date, 3, 1);
	if($from_month_new == "0") 
	{
		$from_month_new = substr($from_date, 4, 1);
	} else {
		$from_month_new = substr($from_date, 3, 2);
	}
$from_year_new = substr($from_date, 6, 4);

$to_date_new = substr($to_date, 0, 1);
	if($to_date_new == "0") 
	{
		$to_date_new = substr($to_date, 1, 1);
	} else {
		$to_date_new = substr($to_date, 0, 2);
	}	
$to_month_new = substr($to_date, 3, 1);
	if($to_month_new == "0") 
	{
		$to_month_new = substr($to_date, 4, 1);
	} else {
		$to_month_new = substr($to_date, 3, 2);
	}
$to_year_new = substr($to_date, 6, 4);

/*	$from_date_new = $from_date_new + 1;	
$from_month_new = $from_month_new + 1;
$from_year_new = $from_year_new + 1;
$to_date_new = $to_date_new + 1;
$to_month_new = $to_month_new + 1;
$to_year_new = $to_year_new + 1;		*/

/*	echo $zone;
echo $police_station;
echo $IO_name;
echo $hostel_name;
echo $from_date_new;
echo $from_month_new;
echo $from_year_new;
echo $to_date_new;
echo $to_month_new;
echo $to_year_new;		*/
//echo $statistics_month;



if($to_year_new > $from_year_new) 
	{
		session_start();
		$_SESSION['zone'] = $zone;
		$_SESSION['police_station'] = $police_station;
		$_SESSION['IO_name'] = $IO_name;
		$_SESSION['hostel_name'] = $hostel_name;
		
		$_SESSION['from_date'] = $from_date;
		$_SESSION['to_date'] = $to_date;
		
		$_SESSION['from_date_new'] = $from_date_new;
		$_SESSION['from_month_new'] = $from_month_new;
		$_SESSION['from_year_new'] = $from_year_new;
		$_SESSION['to_date_new'] = $to_date_new;
		$_SESSION['to_month_new'] = $to_month_new;
		$_SESSION['to_year_new'] = $to_year_new;
		
		header("location:http://www.ec-jrc.com/buddycop/Statistics_buddy.php");
		
		// Write Code here		
    } 
elseif($to_year_new == $from_year_new) 
	{
		if($to_month_new > $from_month_new) 
		{
			session_start();
			$_SESSION['zone'] = $zone;
			$_SESSION['police_station'] = $police_station;
			$_SESSION['IO_name'] = $IO_name;
			$_SESSION['hostel_name'] = $hostel_name;
		
			$_SESSION['from_date'] = $from_date;
			$_SESSION['to_date'] = $to_date;
		
			$_SESSION['from_date_new'] = $from_date_new;
			$_SESSION['from_month_new'] = $from_month_new;
			$_SESSION['from_year_new'] = $from_year_new;
			$_SESSION['to_date_new'] = $to_date_new;
			$_SESSION['to_month_new'] = $to_month_new;
			$_SESSION['to_year_new'] = $to_year_new;
			
		    
		    header("location:http://www.ec-jrc.com/buddycop/Statistics_buddy.php");
			//header("location:http://www.ec-jrc.com/buddycop/Statistics_buddy.php");
			// Write Code here
		}
		elseif($to_month_new == $from_month_new)
		{
			if($to_date_new >= $from_date_new)
			{
				session_start();
				$_SESSION['zone'] = $zone;
				$_SESSION['police_station'] = $police_station;
				$_SESSION['IO_name'] = $IO_name;
				$_SESSION['hostel_name'] = $hostel_name;
		
				$_SESSION['from_date'] = $from_date;
				$_SESSION['to_date'] = $to_date;
		
				$_SESSION['from_date_new'] = $from_date_new;
				$_SESSION['from_month_new'] = $from_month_new;
				$_SESSION['from_year_new'] = $from_year_new;
				$_SESSION['to_date_new'] = $to_date_new;
				$_SESSION['to_month_new'] = $to_month_new;
				$_SESSION['to_year_new'] = $to_year_new;
				
				   header("location:http://www.ec-jrc.com/buddycop/Statistics_buddy.php");
		         
				
				//header("location:http://www.ec-jrc.com/buddycop/Statistics_buddy.php");
				//Write Code Here
			}
			else
			{
				header("location:http://www.ec-jrc.com/buddycop/main.php");
			}
		}
		else
		{
			header("location:http://www.ec-jrc.com/buddycop/main.php");
		}
	} 
else 
	{	
		header("location:http://www.ec-jrc.com/buddycop/main.php");
	}	
?>	
