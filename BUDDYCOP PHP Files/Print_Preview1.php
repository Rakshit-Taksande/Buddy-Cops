<?php


session_start();
	$log_in_tc = $_SESSION['log_in_tc'];
	//echo $log_in_tc;
	
	if($log_in_tc=="0")
	 {
		
			header("location:http://www.ec-jrc.com/buddycop/index.php"); 		
	 }
    else
	{

	
	
	?>
	
	<html>
	<head>
		<title>Buddy Cop</title> 
		<style>
      body{ 
	  border:2px solid black;
	  
	  }
	
	 @page 
    {
        size: auto;   
        margin: 0mm;  
    }
			
		.button
		{
			
			background-color:#3b5998;
			padding: 8px 32px;
			text-align: center;
			font-size: 20px;
			cursor: pointer;
			color:#ffffff;
			onclick:invisble;
		}
		</style>
		<script>
window.onload = function(){zoom(1)}

function myFunction() {
    window.print();
	
	
	
}

</script>
	</head>
	<body>
		<?php //include'header_buddycop.php';?>
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
	
$current_date = date('d-m-Y');	

session_start();

$submit = $_SESSION['submit'];	
	

$ID = $_REQUEST['ID'];
$hostel_name = $_REQUEST['hostel_name'];
$visited_to = $_REQUEST['visited_to'];

$present_girls= $_REQUEST['present_girls'];
$IO_name= $_REQUEST['IO_name'];
$zone = $_REQUEST['zone'];

$police_station = $_REQUEST['police_station'];
$Complaint = $_REQUEST['Complaint'];
$CCTV_Camera = $_REQUEST['CCTV_Camera'];

$compound_wall = $_REQUEST['compound_wall'];	
$entry_register = $_REQUEST['entry_register'];
$Latitude = $_REQUEST['Latitude'];

$Longitude = $_REQUEST['Longitude'];
$read_current_date = $_REQUEST['read_current_date'];	



$_SESSION['ID'] = $_REQUEST[ID];
$_SESSION['hostel_name'] = $_REQUEST[hostel_name];
$_SESSION['visited_to'] = $_REQUEST[visited_to];

$_SESSION['present_girls'] = $_REQUEST[present_girls];
$_SESSION['IO_name'] = $_REQUEST[IO_name];
$_SESSION['zone'] = $_REQUEST[zone];

$_SESSION['police_station'] = $_REQUEST[police_station];
$_SESSION['Complaint'] = $_REQUEST[Complaint];
$_SESSION['CCTV_Camera'] = $_REQUEST[CCTV_Camera];
$_SESSION['compound_wall'] = $_REQUEST[compound_wall];

$_SESSION['entry_register'] = $_REQUEST[entry_register];
$_SESSION['Latitude'] = $_REQUEST[Latitude];
$_SESSION['Longitude'] = $_REQUEST[Longitude];
$_SESSION['read_current_date'] = $_REQUEST[read_current_date];


	$sql ="SELECT ID,hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record WHERE ID='$ID'"; 
    $result= mysqli_query($conn, $sql);
	If(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
            { ?>
		
		<img src="BUDDY COP.png" alt="buddylogo" style="width:15%;height:15%;align:center;">
		
		<table>
		  <table style="width:76%; height: 76%;">
      
		 
			<tr align="left"><th>ID:</th>
		    <td><?php echo $row['ID']; ?></td>
			
			
			
			</tr>
			
			
			<tr align="left"><th>Hostel Name:</th>
			<td><?php echo $row['hostel_name']; ?></td>
			</tr>
			
			<tr align="left"><th>Person Available:</th>
			<td><?php echo $row['visited_to']; ?></td>
			</tr>
			
			<tr align="left"><th>Girls at present:</th>
			<td> <?php echo $row['present_girls']; ?></td>
			</tr>
			
			<tr align="left"><th>IO:</th>
			<td><?php echo $row['IO_name']; ?></td>
			
			</tr>
			
			<tr align="left"><th>Zone:</th>
			<td><?php echo $row['zone']; ?></td>
			</tr>
			
			<tr align="left"><th>Police Station:</th>
			<td><?php echo $row['police_station']; ?></td>
			</tr>
			
			<tr align="left"><th>Compalint:</th>
			<td><?php echo $row['Complaint']; ?></td>
			</tr>
			
			<tr align="left"><th>CCTV:</th>
			<td><?php echo $row['CCTV_Camera']; ?></td>
			</tr>
			
			<tr align="left"><th>Compound Wall:</th>
			<td><?php echo $row['compound_wall']; ?></td>
			</tr>
			
			<tr align="left"><th>Entry Register:</th>
			<td><?php echo $row['entry_register']; ?></td>
			</tr>
			
			<tr align="left"><th>Latitude:</th>
			<td><?php echo $row['Latitude']; ?></td>
			</tr>
			
			<tr align="left"><th>Longitude:</th>
			<td><?php echo $row['Longitude']; ?></td>
			</tr>
			
			<tr align="left"><th>Date:</th>
			<td><?php echo $row['read_current_date']; ?></td>
			</tr>
		    
			</table>
		
	
		</center>
		
		</table>
		
		<?php	}
		}
        ?>
		
		
		<?php
		$sql ="SELECT photo FROM Survey_Record WHERE ID='$ID' "; 
    $result= mysqli_query($conn, $sql);
    If(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
            { ?>
		
		            
					 <div style="position: absolute; right:5%;top:60%;">
					<img src="<?php echo $row["photo"];?>" width="360" height="260" id="pic"></div>  
		
		
		<?php	}
		}
		?>
	

		
<center>	
<form action=" " method="POST">	
<input type="hidden" name ="print_id" value="<?php echo $row['ID'];?>">
<input type= "submit" value="Print" name ="Print" onclick="this.style.visibility= 'hidden';myFunction()" class="button">

</form>
</center>


	</body>
	<?php //include 'footer_buddycop.php';?>
</html>

<?php 
}
	?>
		
			
	
	
	
	
	
	
	