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
		$sql="SELECT count(*) C1, zone FROM `IO_Record` group by zone order by zone";
		$result=$mysqli->query($sql);
		
		while($e=mysqli_fetch_assoc($result)){
		$output[]=$e; 
		
		//echo 'hello';
		}
		echo(json_encode($output));
		
		$sql1="SELECT count(*) C2, police_station FROM `IO_Record` group by police_station order by police_station";
		
		$result2=$mysqli->query($sql1);
		
	
		while($e2=mysqli_fetch_assoc($result2)){
		$output2[]=$e2; 
		//echo 'hi....';
		}
		
			
		
		
		
//echo(json_encode($output."".$output2));		

echo(json_encode($output2));

		
		
		
		
		$mysqli->close();	

		?>	