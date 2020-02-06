<?php

/*
session_start();
	$log_in_tc = $_SESSION['log_in_tc'];
//	echo $log_in_tc;
	
	if($log_in_tc=="0")
	 {
		
			header("location:http://www.ec-jrc.com/buddycop/index.php"); 		
	 }
    else
	{      */


	
	
	?>
	
<html>
	<head>
		<title>data</title>
		<style>
           table{
					border-collapse: collapse;
					width: 100%;
				}

			th, td {
						text-align: left;
						padding: 8px;
				   }	
			tr:nth-child(even){background-color: #f2f2f2}
		</style>
	</head>
   		<?php //include 'header_sssi.php';?>
	<body>
	
		<table height="400" width="800">
			<tr>
				<td>
				
<?php
    $servername = "mysql.hostinger.in";
	$username = "u786340404_demo";
	$password = "a2WYHAXOSk4Q";
	$db="u786340404_demo";
	
	//create connection

	$conn = new mysqli($servername, $username, $password,$db);
	


if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
    } 
//query

session_start();

$ID = $_SESSION['ID'];
$hostel_name = $_SESSION['hostel_name'];
$visited_to = $_SESSION['visited_to'];

$present_girls= $_SESSION['present_girls'];
$IO_name= $_SESSION['IO_name'];
$zone = $_SESSION['zone'];

$police_station = $_SESSION['police_station'];
$Complaint = $_SESSION['Complaint'];
$CCTV_Camera = $_SESSION['CCTV_Camera'];

$compound_wall = $_SESSION['compound_wall'];	
$entry_register = $_SESSION['entry_register'];
$Latitude = $_SESSION['Latitude'];
$Longitude = $_SESSION['Longitude'];
	
if ($submit == "Print") {
	?>
		<form action="Print_Preview1.php" method="POST">
		<center>
		<p><a href="main.php">Back to Home Page</a></p>
		
		<p><a href="logout.php" >Logout</a></p>
		
		
		
		</center>
        <table border="1">
			<tr bgcolor="#b8d1f3">
                <th>ID</th>
                <th>Hostel Name</th>
                <th>Person Available</th>
				<th>Girls at present</th>
				<th>IO</th>
				<th>Zone</th>
				<th>Police Station</th>
				<th>Compalint</th>
				<th>CCTV</th>
				<th>Compound Wall</th>
				<th>Entry Register</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Date</th>
				<th>Print</th>
			 
			</tr>
     
<?php
	$sql ="SELECT ID,hostel_name,visited_to,present_girls,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record WHERE ID='$ID'"; 
		 
	
	
    $result= mysqli_query($conn, $sql);
    If(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
           { ?>	 
	   
	   <tr>   
			
			<td><input type="text" name="ID" value="<?php echo $row['ID']; ?>" ></td> 
			<td><input type="text" name="Hostel Name" value="<?php echo $row['Hostel Name']; ?>" ></td> 
			<td><input type="text" name="Person Available" value="<?php echo $row['Person Available']; ?> "></td> 
			<td><input type="text" name="Girls at present" value="<?php echo $row['Girls at present']; ?>" ></td>
			<td><input type="text" name="IO" value="<?php echo $row['IO']; ?>"></td>
			<td><input type="text" name="Zone" value="<?php echo $row['Zone']; ?>"></td>
			<td><input type="text" name="Police Station" value="<?php echo $row['Police Station']; ?>" ></td>
			<td><input type="text" name="Compalint" value="<?php echo $row['Compalint']; ?>" ></td>
			<td><input type="text" name="CCTV" value="<?php echo $row['CCTV']; ?>" ></td>
            <td><input type="text" name="Compound Wall" value="<?php echo $row['Compound Wall']; ?>" ></td>	
			<td><input type="text" name="Entry Register" value="<?php echo $row['Entry Register']; ?>" ></td>
			<td><input type="text" name="Latitude" value="<?php echo $row['Latitude']; ?>" ></td>
			<td><input type="text" name="Longitude" value="<?php echo $row['Longitude']; ?>" ></td>
			<td><input type="text" name="Date" value="<?php echo $row['Date']; ?>" ></td>
     
			
			
			<?php
			echo '<td><a href="Print_Preview1.php?ID=' . $row['ID'] . '&Hostel Name=' . $row['Hostel Name'] . '&Person Available=' . $row['Person Available'] . '&Girls at present=' . $row['Girls at present'] . '&IO=' . $row['IO'] . '&Zone=' . $row['Zone'] . '&Police Station=' . $row['Police Station'] . '&Compalint=' . $row['Compalint'] . '&CCTV=' . $row['CCTV'] . '&Compound Wall=' . $row['Compound Wall'].'&Entry Register=' . $row['Entry Register'] . '&Latitude=' . $row['Latitude'] .'&Longitude=' . $row['Longitude'] . '&Date=' . $row['Date'] .'" >Print</a></td>';

  }
		
	}
	else
	{
		echo "Sorry..";
	}
mysqli_close($conn);
}
?>
             
		</table>
		</td>
	</tr>
	</table>		
		<?php //include 'footer_sssi.php';?>
	</body>
</html>

<?php /*
}*/
	?>
