<?php
		

 $hostname = "mysql.hostinger.in";


$username = "u682671774_buddy";


$password = "buddy_cop_ec";


$dbname = "u682671774_buddy";




		$mysqli = new mysqli($hostname,$username,$password,$dbname);
		/* check connection */
		if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
		}		

		$mysqli->query("SET NAMES 'utf8'");
		$sql="SELECT count(*) C1, police_station FROM `IO_Record` group by police_station order by police_station";
		$result2=$mysqli->query($sql);
		while($e=mysqli_fetch_assoc($result2)){
		$output[]=$e; 
		}	

		print(json_encode($output)); 
		$mysqli->close();	

		?>	