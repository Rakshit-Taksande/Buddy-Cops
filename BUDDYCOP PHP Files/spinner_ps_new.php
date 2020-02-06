<?php
define('HOST','mysql.hostinger.in');
define('USER','u682671774_buddy');
define('PASS','buddy_cop_ec');
define('DB','u682671774_buddy');
 
$con = mysqli_connect(HOST,USER,PASS,DB);



$result = array();

//$select_zone=$_POST['zone'];
//$select_zone="Zone 1";


	//$sql = "SELECT * FROM `IO_Record` WHERE `zone`='$select_zone'"; 
	$sql = "SELECT * FROM `IO_Record`"; 
	$res = mysqli_query($con,$sql);

	$check = mysqli_fetch_array($res);
	
	
	

	$res = mysqli_query($con,$sql); 
	
 
	while($row = mysqli_fetch_array($res))
	{
		array_push($result,
		array(
		'IO_name'=>$row[1],
		'zone'=>$row[5],
		'police_station'=>$row[6],
		
		));
	}
	echo json_encode(array("result"=>$result));


mysqli_close($con);
?>

