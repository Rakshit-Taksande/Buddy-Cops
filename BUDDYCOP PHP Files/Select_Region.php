<?php
define('HOST','mysql.hostinger.in');
define('USER','u682671774_atcng');
define('PASS','ec_jrc_atcngp');
define('DB','u682671774_atcng');
 
$con = mysqli_connect(HOST,USER,PASS,DB);



	$result = array();

	$sql = "select * from  Location"; 
	$res = mysqli_query($con,$sql);

	$check = mysqli_fetch_array($res);
	
	
	

	$res = mysqli_query($con,$sql); 
	
 
	while($row = mysqli_fetch_array($res))
	{
		array_push($result,
		array(
		'Region'=>$row[1],
/*		'PASSWORD'=>$row[2],
		'zone'=>$row[5],
		'police_station'=>$row[6],		*/
		
		));
	}
	echo json_encode(array("result"=>$result));


mysqli_close($con);
?>

