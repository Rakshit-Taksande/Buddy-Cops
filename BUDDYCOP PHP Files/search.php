<?php
session_start();
	$log_in_buddycop = $_SESSION['log_in_buddycop'];
//	echo $log_in_cyber;
	
	if($log_in_buddycop!="1") 
	 {
			header("location:http://www.ec-jrc.com/buddycop/buddycop.php"); 		
	 }
    else
	{ 				
?>	

<html>
	<head>
		<title>data</title>
		<style>
           /*       table{
					border-collapse: collapse;
					width: 100%;
				}		*/

			th, td {
						text-align: left;
						padding: 8px;
				   }	
			tr:nth-child(even){background-color: #f2f2f2}
			body {
    background-color: peachpuff;
			}
			
		.button
		{
			background-color:#3b5998;
			padding: 8px 32px;
			text-align: center;
			font-size: 16px;
			cursor: pointer;
			color:#ffffff;
		}
		input {
    background-color: transparent;
    border: 0px solid;
    
}
		</style>
		<script>
window.onload = function(){zoom(1)}

</script>
	</head>
   		
	<body>
	
	<?php //include 'header_cyber.php';?>
	
	<center>
		
				
<?php
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

session_start();

$zone = $_POST['zone'];
$police_station = $_POST['police_station'];
$IO_name = $_POST['IO_name'];
$hostel_name = $_POST['hostel_name'];

$sel_date = $_POST['sel_date'];
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];
$submit = $_POST['submit'];



$row['join_date'] = $sel_date;
$sel_date = date('d-m-Y', strtotime( $row['join_date'] ));

$row['join_date'] = $from_date;
$from_date = date('d-m-Y', strtotime( $row['join_date'] ));
$row['join_date'] = $to_date;
$to_date = date('d-m-Y', strtotime( $row['join_date'] ));



$_SESSION['zone'] = $_POST[zone];
$_SESSION['police_station'] = $_POST[police_station];
$_SESSION['IO_name'] = $_POST[IO_name];
$_SESSION['hostel_name'] = $_POST[hostel_name];

$_SESSION['sel_date'] = $_POST[sel_date];
$_SESSION['from_date'] = $_POST[from_date];
$_SESSION['to_date'] = $_POST[to_date];
$_SESSION['submit'] = $_POST[submit];


/* echo $sel_date;
echo $from_date;
echo $to_date;		*/


/*	$sel_reason = $_POST['sel_reason'];
$submit = $_POST['submit'];
$sel_chamber = $_POST['sel_chamber'];		*/



//echo $sel_date;


/*	$_SESSION['sel_reason'] = $_POST[sel_reason];
$_SESSION['submit'] = $_POST[submit];
$_SESSION['sel_chamber'] = $_POST[sel_chamber];		*/

/*	echo $sel_date;
	echo $from_date;
	echo $to_date;
	echo $submit;		*/	
//echo $statistics_month;

/*$sel_reason = $_POST['sel_reason'];
session_start();
$sd=$_REQUEST['SD_form'];
$_session[ID]="$id";

$submit = $_POST['submit'];			*/




/*	$_SESSION['sd'] = $_REQUEST['SD_form'];
$_SESSION['submit'] = $_POST[submit];
$_SESSION['sel_reason'] = $_POST[sel_reason];		*/


//$sql="SELECT id,name,address,phone FROM Complaint_Details_New WHERE read_current_date like '$sel_date%' ";
	


if ($submit == "Statistics") {	

	if ($from_date != "" and $to_date != "") {
			
	session_start();
	$_SESSION['zone'] = $zone;
	$_SESSION['police_station'] = $police_station;
	$_SESSION['IO_name'] = $IO_name;
	$_SESSION['hostel_name'] = $hostel_name;
	
	$_SESSION['from_date'] = $from_date;	
	$_SESSION['to_date'] = $to_date;	
//	$_SESSION['statistics_month'] = $statistics_month;
	header("location:http://www.ec-jrc.com/buddycop/Statistics1.php");
	} else {
	header("location:http://www.ec-jrc.com/buddycop/main.php"); 		
	}
} elseif ($submit == "Excel Report") {
	if ($from_date != "" and $to_date != "") {
			
	session_start();
	$_SESSION['zone'] = $zone;
	$_SESSION['police_station'] = $police_station;
	$_SESSION['IO_name'] = $IO_name;
	$_SESSION['hostel_name'] = $hostel_name;
	
	$_SESSION['from_date'] = $from_date;	
	$_SESSION['to_date'] = $to_date;	
	header("location:http://www.ec-jrc.com/buddycop/Excel1.php");
	} else {
	header("location:http://www.ec-jrc.com/buddycop/main.php"); 		
	}
} 

?>
             
		</table>
		</td>
	</tr>
	</table>		
		<?php //include 'footer_cyber.php';?>
		</center>
	</body>
</html>
<?php
}		
?>








