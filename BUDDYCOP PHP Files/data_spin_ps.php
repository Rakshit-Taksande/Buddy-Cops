<?php


$hostname = "mysql.hostinger.in";


$username = "u682671774_buddy";


$password = "buddy_cop_ec";


$dbname = "u682671774_buddy";



$con = new mysqli($hostname,$username,$password,$dbname);
		/* check connection */
			
		
		
//$con = mysqli_connect($hostname,$username,$password) or die("connection failed");
//mysqli_select_db($dbname,$con) or die("dbname selection failed");


$r=mysqli_query($con,"select police_station from IO_Record ");
while($row=mysqli_fetch_array($r))
{
$result1[]=$row;
//echo $fin."<br>";
}

//echo $cls;
print(json_encode($result1));

mysqli_close($con);
?>