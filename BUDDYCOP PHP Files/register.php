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

	$servername = "mysql.hostinger.in";
	$username = "u682671774_buddy";
	$password = "buddy_cop_ec";
	$db="u682671774_buddy";

//create connection

	$con = new mysqli($servername, $username, $password,$db);

		if ($con->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		} 
		
		
		
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
//$datetime = ($row['join_date']);
/* if ($datetime !='0000-00-00')
 {*/
$from_date = date('d-m-Y', strtotime( $row['join_date']));
/* }
 else{
	$from_date='';
 }	*/


 //$datetime = ($row['date']); if ($datetime !='0000-00-00'){ $mydate = date('d-m-Y', strtotime($datetime)); }else{ $mydate =''; }



$row['join_date'] = $to_date;
//$datetime = ($row['join_date']);
/* if ($datetime !='0000-00-00')
 {*/
   $to_date = date('d-m-Y', strtotime( $row['join_date']));
 /*}
 else{
	$to_date='';
 }	
*/



$_SESSION['zone'] = $_POST[zone];
$_SESSION['police_station'] = $_POST[police_station];
$_SESSION['IO_name'] = $_POST[IO_name];
$_SESSION['hostel_name'] = $_POST[hostel_name];

$_SESSION['sel_date'] = $_POST[sel_date];
$_SESSION['from_date'] = $_POST[from_date];
$_SESSION['to_date'] = $_POST[to_date];
$_SESSION['submit'] = $_POST[submit];

$read_current_date = date('d-m-Y');
	
/*	$investigation_officer = '';
	
	if(isset($_GET['investigation_officer']))
  	{
  		 echo $investigation_officer = $_GET['investigation_officer'];
  	}			*/
	
	$submit = $_POST['submit'];
	
	
//	session_start();
//	$_SESSION['submit'] = $submit;
	
	if($submit == 'Excel Report')	
  	{
	   if ($from_date == "01-01-1970" and $to_date == "01-01-1970") {
		header("location:http://www.ec-jrc.com/buddycop/main.php");	
		}
	else
	{
	 session_start();
	$_SESSION['zone'] = $zone;
	$_SESSION['police_station'] = $police_station;
	$_SESSION['IO_name'] = $IO_name;
	$_SESSION['hostel_name'] = $hostel_name;
	
	$_SESSION['from_date'] = $from_date;	
	$_SESSION['to_date'] = $to_date;	
	header("location:http://www.ec-jrc.com/buddycop/Excel1.php");		
	}
   }  		

	
	elseif($submit == 'Statistics')
  	{
		if ($from_date == "01-01-1970" and $to_date == "01-01-1970") {
		header("location:http://www.ec-jrc.com/buddycop/main.php");	
	    } else {
	session_start();
	$_SESSION['zone'] = $zone;
	$_SESSION['police_station'] = $police_station;
	$_SESSION['IO_name'] = $IO_name;
	$_SESSION['hostel_name'] = $hostel_name;
	
	$_SESSION['from_date'] = $from_date;	
	$_SESSION['to_date'] = $to_date;	
//	$_SESSION['statistics_month'] = $statistics_month;
	header("location:http://www.ec-jrc.com/buddycop/Statistics1.php");
	 		
	}
	}
	
	elseif($submit == 'Hostel Registeration')
		
  	{	
?>

<html>
	<head>	
	<body background="img.PNG">
	
	<div style="position: absolute; left:38%; top:48%;">
<img src="pic1.png"  style="width:45%;height:45%;"></div>    

		<title>Hostel Registeration</title>
		<style>
			
		.button
		{
			background-color:#3b5998;
			padding: 8px 32px;
			text-align: center;
			font-size: 16px;
			cursor: pointer;
			color:#ffffff;
		}
		
		
		
		</style>
		<script>
window.onload = function(){zoom(1)}

</script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Zone 1" :	
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Wadi Police Station","Wadi Police Station");
            document.getElementById("police_station").options[2]=new Option("Hingna Police Station","Hingna Police Station");
			document.getElementById("police_station").options[3]=new Option("MIDC Police Station","MIDC Police Station");
            document.getElementById("police_station").options[4]=new Option("Sonegaon Police Station","Sonegaon Police Station");
			document.getElementById("police_station").options[5]=new Option("RP Nagar Police Station","RP Nagar Police Station");
            document.getElementById("police_station").options[6]=new Option("Bajaj Nagar Police Station","Bajaj Nagar Police Station");
            break;
        case "Zone 2" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Sitabuildi Police Station","Sitabuildi Police Station");
            document.getElementById("police_station").options[2]=new Option("Ambazari Police Station","Ambazari Police Station");
			document.getElementById("police_station").options[3]=new Option("Sadar Police Station","Sadar Police Station");
            document.getElementById("police_station").options[4]=new Option("Gittikhadan Police Station","Gittikhadan Police Station");
			document.getElementById("police_station").options[5]=new Option("Mankapur Police Station","Mankapur Police Station");
            document.getElementById("police_station").options[6]=new Option("Dhantoli Police Station","Dhantoli Police Station");
            break;
		case "Zone 3" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Panchpaoli Police Station","Panchpaoli Police Station");
            document.getElementById("police_station").options[2]=new Option("Lakadganj Police Station","Lakadganj Police Station");
			document.getElementById("police_station").options[3]=new Option("Tahsil Police Station","Tahsil Police Station");
            document.getElementById("police_station").options[4]=new Option("Kotwali Police Station","Kotwali Police Station");
			document.getElementById("police_station").options[5]=new Option("Ganeshpeth Police Station","Ganeshpeth Police Station");
            document.getElementById("police_station").options[6]=new Option("Shantinagar Police Station","Shantinagar Police Station");
            break;
		case "Zone 4" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Ajani Police Station","Ajani Police Station");
            document.getElementById("police_station").options[2]=new Option("Imamwada Police Station","Imamwada Police Station");
			document.getElementById("police_station").options[3]=new Option("Sakkardara Police Station","Sakkardara Police Station");
            document.getElementById("police_station").options[4]=new Option("Nandanwan Police Station","Nandanwan Police Station");
			document.getElementById("police_station").options[5]=new Option("Hudkeshwar Police Station","Hudkeshwar Police Station");
            document.getElementById("police_station").options[6]=new Option("","");
            break;
		case "Zone 5" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Kamptee Police Station","Kamptee Police Station");
            document.getElementById("police_station").options[2]=new Option("Jaripatka Police Station","Jaripatka Police Station");
			document.getElementById("police_station").options[3]=new Option("Koradi Police Station","Koradi Police Station");
            document.getElementById("police_station").options[4]=new Option("Juni Kamptee Police Station","Juni Kamptee Police Station");
			document.getElementById("police_station").options[5]=new Option("Kalamana Police Station","Kalamana Police Station");
            document.getElementById("police_station").options[6]=new Option("Yahodhara Police Station","Yahodhara Police Station");
            break;
        }
        return true;
    }
	
	
	
	 
	function success()
	{
		 var n = document.Reg.hostel_name.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Hostel Name");
              document  .Reg.hostel_name.focus();
              return false;
           }
		    var n = document.Reg.hostel_address.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Hostel Address");
              document  .Reg.hostel_address.focus();
              return false;
           }
		    var n = document.Reg.num_girls.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the number of Girls in Hostel");
              document  .Reg.num_girls.focus();
              return false;
           }
		    var n = document.Reg.zone.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select Zone");
              document  .Reg.zone.focus();
              return false;
           }
		    var n = document.Reg.police_station.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select Police Station");
              document  .Reg.police_station.focus();
              return false;
           }
		   
		   var n = document.Reg.owner_name.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Owner Name");
              document  .Reg.owner_name.focus();
              return false;
           }
		   
		   var n = document.Reg.CCTV_Camera.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select YES or NO for CCTV / Camera");
              document  .Reg.CCTV_Camera.focus();
              return false;
           }
		   var n = document.Reg.compound_wall.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select YES or NO for Compound Wall");
              document  .Reg.compound_wall.focus();
              return false;
           }
		   var n = document.Reg.sanitation_facility.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select YES or NO for Sanitation Facility");
              document  .Reg.sanitation_facility.focus();
              return false;
           }
//		alert("Data entered successfully");
		return false;
	}	
	
    </script>
		
		
		
		
		


</style>
	</head>
	 <body>
	 <?php include 'header_buddycop.php';?>
	 <center>
	<form name="Reg" action="save_hostel_record.php" method="POST" >
	<p><a href="main.php" color="Black">Back to Home Page</a></p>
	<p><a href="buddycop.php" color="Black">Log Out</a></p>
	<div>
	<table align="left">
	
<!--	 	<tr>
		<td>
		<h3>Complaint ID</h3></td>
		<td><input type="text" name="name" size="8"></td>
		</tr>		-->	
		
		<tr>		
		<td>
		<h3>Date : </h3></td>
		<td><input type="text" name="read_current_date" size="8" value="<?php echo $read_current_date; ?>" readonly ></td>
		</tr>
		
	<!--	<tr>
		<td>
		<h2>Hostel Details</h2>
		</td>
		</tr>		-->
		
		<tr>
		<th>Name of Hostel : </th>
		<td><input type="text" name="hostel_name" size="45" required></td>
		</tr>
		<tr>
		<th>Address : </th>
		<td><input type="text"  name="hostel_address" size="45" required><td>
		</tr>
		<tr>
		<th>Phone : </th>
		<td><input type="text" name="hostel_phone" size="45"></td>
		</tr>
		<tr>
		<th>Number of Girls in Hostel : </th>
		<td><input type="text" name="num_girls" size="10" required></td>
		</tr>		
		
	<!--	<tr>
		<td>
		<h2>Police Station Detail</h2>
		</td>
		</tr>		-->
		
		
		<tr>
		<div class="category_div" id="category_div"><th>Zone : </th>
        <td><select id="zone" name="zone" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
        <option value="">Select Zone</option>
        <option value="Zone 1">Zone 1</option>
        <option value="Zone 2">Zone 2</option>
		<option value="Zone 3">Zone 3</option>
        <option value="Zone 4">Zone 4</option>
		<option value="Zone 5">Zone 5</option>
        </select></td>
    </div>
	</tr>
	
	<tr>	
    <div class="sub_category_div" id="sub_category_div"><th>Police Station : </th>
        <td><script type="text/javascript" language="JavaScript">
        document.write('<select name="police_station" id="police_station" required><option value="">Select Police Station</option></select>')
        </script>
        <noscript>
        <select id="police_station" name="police_station" required>
		
<!--            <option value="open">OPEN</option>
            <option value="delivered">DELIVERED</option>	-->
        </select></td>
        </noscript>
    </div>
	</tr>	
		
	<!--	<tr>
	    <td>
		<h2>Owner and Manager Details</h2>
		</td>	
		</tr>		-->
		
		<tr>
		<th>Owner Name:</th>
		<td><input type="text" name="owner_name" size="45" required></td>
		</tr>
		<tr>
		<th>Owner Mobile No:</th>
		<td><input type="text" name="owner_mobile" size="45"></td>
		</tr>
		<tr>
		<th>Manager Name:</th>
		<td><input type="text" name="manager_name" size="45"></td>
		</tr>
		<tr>
		<th>Manager Mobile No:</th>
		<td><input type="text" name="manager_mobile" size="45"></td>
		</tr>
		
	<!--	<tr>
		<td>
		<h2>Remarks</h2></td><td><input type="text" name ="remarks" size="45" >
		</td>
		</tr>		-->
	
	<!--	</table>		-->
		
		
	<!--	<table align ="right">		-->
	<!--	<tr>
		<td>
		</td>
		<td>
			<img src="insert.png"alt="insert" width="300" height="200" align="right">
		</td>
		</tr>		-->
		
		
		
	<!--	<tr>
		<td>
		<h2>Warden and Security Details</h2>
		</td>
		</tr>		-->
		
		<tr>
		<th>Warden Name : </th>
		<td><input type="text" name="warden_name" size="45"></td>
		</tr>
		<tr>
		<th>Warden Mobile No : </th>
		<td><input type="text" name="warden_mobile" size="45"></td>
		</tr>
		<tr>
		<th>Security Name : </th>
		<td><input type="text" name="security_name" size="45"></td>
		</tr>
		<tr>
		<th>Security Mobile No : </th>
		<td><input type="text" name="security_mobile" size="45"></td>
		</tr>
		
<!--		<tr>
		<th hidden>Processed by : </th>
		<td><input type="text" name="status" size="40" readonly hidden></td>
		</tr>		-->
		
	<!--	<tr>
		<td>
		<h2>Features at Hostel</h2>
		</td>
		</tr>		-->
		
		<tr>
		<th>CCTV / Camera : </th>
		<td>		
<!--		<input type="text" name="investigation_officer"size="40">		-->
		<select name="CCTV_Camera" required>
                <option value="">Select YES or NO</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option> 
        </select>
		</td>
		</tr>
		
		<tr>
		<th>Compound Wall : </th>
		<td>		
<!--		<input type="text" name="investigation_officer"size="40">		-->
		<select name="compound_wall" required>
                <option value="">Select YES or NO</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option> 
        </select>
		</td>
		</tr>
		
		<tr>
		<th>Sanitation Facility : </th>
		<td>		
<!--		<input type="text" name="investigation_officer"size="40">		-->
		<select name="sanitation_facility" required>
                <option value="">Select YES or NO</option>
                <option value="YES">YES</option>
                <option value="NO">NO</option> 
        </select>
		</td>
		</tr>
		
		
		
<!--		<tr>
		<th>Email</th>
		<td><input type="text" name="acemail" size="45"></td>
		</tr>		-->
		
		<tr>
		<td>
		</td>
		<td><input type="submit" name="Submit" value="Save New Record" class="button" onclick="success()"></td>
		
		</tr>
						
		</table>
		</div>

		

<!--		<tr>
		<td>
		<br>
		<br>
		<br>
		</td>
		</tr>		-->
		
<div style="position: fixed; right:40; top:55;width:400px;height:580px;line-height:3cm;overflow:scroll;padding:5px">	
	<table border="1">
	
<tr>
<th>
ID 
</th>
<th>
Edit 
</th>
<th>
Name of hostel
</th>
<th>
Address
</th>
<th>
Phone number
</th>
<th>
Number of Girls in hostel
</th>
<th>
Zone
</th>
<th>
Police Station
</th>
<th>
Owner Name
</th>
<th>
Owner Mobile No
</th>
<th>
Manager Name
</th> 
<th>
Manager Mobile No
</th>
<th>
Warden Name 
</th>
<th>
Warden Mobile No 
</th>
<th>
Security Name 
</th>
<th>
Security Mobile No  
</th>
<th>
CCTV / Camera 
</th>
<th>
Compound Wall 
</th>
<th>
Sanitation Facility 
</th>

</tr> 
 <?php
define('HOST','mysql.hostinger.in');
define('USER','u682671774_buddy');
define('PASS','buddy_cop_ec');
define('DB','u682671774_buddy');

 $submit='Save New Record';
 
 $_SESSION['submit'] = $submit;
 
 session_start();
 
 $con = new mysqli(HOST,USER,PASS,DB);
 
 
/*	$ID=$POST['ID'];
	$hostel_name = $_POST['hostel'];
 $hostel_address = $_POST['address'];
 $hostel_phone = $_POST['number'];
 $num_girls = $_POST['nog'];
 $zone = $_POST['zone'];
 $police_station =$_POST['police_station'];
 $owner_name = $_POST['owner_name'];
 $owner_mobile = $_POST['owner_mobile'];
 $manager_name = $_POST['manager_name'];
 $manager_mobile = $_POST['manager_mobile'];
 $warden_name = $_POST['warden_name'];
 $warden_mobile = $_POST['warden_mobile'];
 $security_name = $_POST['security_name'];
 $security_mobile = $_POST['security_mobile'];
 $CCTV_Camera = $_POST['CCTV_Camera'];
 $compound_wall = $_POST['compound_wall'];
 $sanitation_facility = $_POST['sanitation_facility'];	*/

$sql ="SELECT * FROM Hostel_Record ORDER BY ID DESC";
//$result=mysqli_query($sql);

$result = mysqli_query($con,$sql);

$rowcount=mysqli_num_rows($result);
$i=0;
	while($i<$rowcount)
	{
		
		$rows=mysqli_fetch_array ($result);
		
		
		
		
		
		
		//$rows=mysqli_fetch_row ($result);
		
	//$rows=mysqli_fetch_assoc ($result);
	
/*$f1=mysql_result($result,$i,"field1");
$f2=mysql_result($result,$i,"field2");
$f3=mysql_result($result,$i,"field3");
$f4=mysql_result($result,$i,"field4");
	
*/	
	
	
?>	
<tr>
<td><?php echo $rows['ID'];?></td>
<?php
			echo '<td><a href="record_for_update_Hostel.php?ID=' . $rows['ID'] . '" >Edit</a></td>';
?>	
<td><?php echo $rows['hostel_name'];?></td>
<td><?php	echo $rows['hostel_address'];?></td>
<td><?php	echo $rows['hostel_phone'];?></td>
<td>	<?php echo $rows['num_girls'];?></td>
<td>	<?php echo $rows['zone'];?></td>
<td>	<?php echo $rows['police_station'];?></td>
<td>	<?php echo $rows['owner_name'];?></td>
<td>	<?php echo $rows['owner_mobile'];?></td>
<td>	<?php echo $rows['manager_name'];?></td>
<td>	<?php echo $rows['manager_mobile'];?></td>
<td>	<?php echo $rows['warden_name'];?></td>
<td>	<?php echo $rows['warden_mobile'];?></td>
<td>	<?php echo $rows['security_name'];?></td>
<td>	<?php echo $rows['security_mobile'];?></td>
<td>	<?php echo $rows['CCTV_Camera'];?></td>
<td>	<?php echo $rows['compound_wall'];?></td>
<td>	<?php echo $rows['sanitation_facility'];?></td>
		
</tr>
	<?php
	$i++;	
}
?>
</td>
</tr>
</tbody>
</table>
</div>	
		
		</form>
		
		</center>
	</body>
	

</html>

<?php
}
elseif ($submit == 'IO Registeration')
{
?>

<html>
	<head>	
	<body background="img.PNG">
	
	<div style="position: absolute; left:5%; top:60%;">
<img src="pic7.png"  style="width:30%;height:40%;"></div>    



		<title>IO Registeration</title>
		<style>
			
		.button
		{
			background-color:#3b5998;
			padding: 8px 32px;
			text-align: center;
			font-size: 16px;
			cursor: pointer;
			color:#ffffff;
		}
		</style>
		<script>
window.onload = function(){zoom(1)}

</script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Zone 1" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Wadi Police Station","Wadi Police Station");
            document.getElementById("police_station").options[2]=new Option("Hingna Police Station","Hingna Police Station");
			document.getElementById("police_station").options[3]=new Option("MIDC Police Station","MIDC Police Station");
            document.getElementById("police_station").options[4]=new Option("Sonegaon Police Station","Sonegaon Police Station");
			document.getElementById("police_station").options[5]=new Option("RP Nagar Police Station","RP Nagar Police Station");
            document.getElementById("police_station").options[6]=new Option("Bajaj Nagar Police Station","Bajaj Nagar Police Station");
            break;
        case "Zone 2" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Sitabuildi Police Station","Sitabuildi Police Station");
            document.getElementById("police_station").options[2]=new Option("Ambazari Police Station","Ambazari Police Station");
			document.getElementById("police_station").options[3]=new Option("Sadar Police Station","Sadar Police Station");
            document.getElementById("police_station").options[4]=new Option("Gittikhadan Police Station","Gittikhadan Police Station");
			document.getElementById("police_station").options[5]=new Option("Mankapur Police Station","Mankapur Police Station");
            document.getElementById("police_station").options[6]=new Option("Dhantoli Police Station","Dhantoli Police Station");
            break;
		case "Zone 3" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Panchpaoli Police Station","Panchpaoli Police Station");
            document.getElementById("police_station").options[2]=new Option("Lakadganj Police Station","Lakadganj Police Station");
			document.getElementById("police_station").options[3]=new Option("Tahsil Police Station","Tahsil Police Station");
            document.getElementById("police_station").options[4]=new Option("Kotwali Police Station","Kotwali Police Station");
			document.getElementById("police_station").options[5]=new Option("Ganeshpeth Police Station","Ganeshpeth Police Station");
            document.getElementById("police_station").options[6]=new Option("Shantinagar Police Station","Shantinagar Police Station");
            break;
		case "Zone 4" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Ajani Police Station","Ajani Police Station");
            document.getElementById("police_station").options[2]=new Option("Imamwada Police Station","Imamwada Police Station");
			document.getElementById("police_station").options[3]=new Option("Sakkardara Police Station","Sakkardara Police Station");
            document.getElementById("police_station").options[4]=new Option("Nandanwan Police Station","Nandanwan Police Station");
			document.getElementById("police_station").options[5]=new Option("Hudkeshwar Police Station","Hudkeshwar Police Station");
            
            break;
		case "Zone 5" :
            document.getElementById("police_station").options[0]=new Option("Select Police Station","");
            document.getElementById("police_station").options[1]=new Option("Kamptee Police Station","Kamptee Police Station");
            document.getElementById("police_station").options[2]=new Option("Jaripatka Police Station","Jaripatka Police Station");
			document.getElementById("police_station").options[3]=new Option("Koradi Police Station","Koradi Police Station");
            document.getElementById("police_station").options[4]=new Option("Juni Kamptee Police Station","Juni Kamptee Police Station");
			document.getElementById("police_station").options[5]=new Option("Kalamana Police Station","Kalamana Police Station");
            document.getElementById("police_station").options[6]=new Option("Yahodhara Police Station","Yahodhara Police Station");
            break;
        }
        return true;
    }
	
	function success()
	{
		 var n = document.Reg.name.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Name ");
              document  .Reg.name.focus();
              return false;
           }
		
		    var n = document.Reg.phone.value;
                          
         if(n.length == 0)
           { 
             alert("Please Enter the Phone number ");
              document  .Reg.phone.focus();
              return false;
           }
		    var n = document.Reg.zone.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select Zone ");
              document  .Reg.zone.focus();
              return false;
           }
		    var n = document.Reg.police_station.value;
                          
         if(n.length == 0)
           { 
             alert("Please Select Police Station ");
              document  .Reg.police_station.focus();
              return false;
           }
//		alert("Data entered successfully");
		return false;
	}	
	
    </script>

</style>
	</head>
	 <body>
	 <?php include 'header_buddycop.php';?>
	 <center>
	<form name="Reg" action="save_IO_record.php" method="POST" >
	<p><a href="main.php">Back to Home Page</a></p>
	<p><a href="buddycop.php">Log Out</a></p>
	<table align="left">
<!--	 	<tr>
		<td>
		<h3>Complaint ID</h3></td>
		<td><input type="text" name="name" size="8"></td>
		</tr>		-->	
		<tr>		
		<td>
		<h3>Date</h3></td>
		<td><input type="text" name="read_current_date" size="8" value="<?php echo $read_current_date; ?>" readonly ></td>
		</tr>
		<tr>
		<td>
		<h2>Inspection Officer Details</h2>
		</td>
		</tr>	
		
		<tr>
		<th>Name : </th>
		<td><input type="text" name="IO_name" size="45" required></td>
		</tr>
		<tr>
		<th>Buckle No : </th>
		<td><input type="text"  name="buckle_no" size="45" ><td>
		</tr>
		<tr>
		<th>Phone : </th>
		<td><input type="text" name="phone" size="45" required></td>
		</tr>
		<tr>
		<th>Email : </th>
		<td><input type="text" name="email" size="45"></td>
		
		<tr>
		<td>
		<h2>Police Station Detail</h2>
		</td>
		</tr>
		
		<tr>
		<div class="category_div" id="category_div"><th>Zone:</th>
        <td><select id="zone" name="zone" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
        <option value="">Select Zone</option>
        <option value="Zone 1">Zone 1</option>
        <option value="Zone 2">Zone 2</option>
		<option value="Zone 3">Zone 3</option>
        <option value="Zone 4">Zone 4</option>
		<option value="Zone 5">Zone 5</option>
        </select></td>
    </div>
	</tr>
	
	<tr>	
    <div class="sub_category_div" id="sub_category_div"><th>Police Station:</th>
        <td><script type="text/javascript" language="JavaScript">
        document.write('<select name="police_station" id="police_station" required><option value="">Select Police Station</option></select>')
        </script>
        <noscript>
        <select id="police_station" name="police_station" required>
		
<!--            <option value="open">OPEN</option>
            <option value="delivered">DELIVERED</option>	-->
        </select></td>
        </noscript>
    </div>
	</tr>	
		
		<tr>
		<td>
		</td>
		<td><input type="submit" name="Submit" value="Save IO Details" class="button" onclick="success()"></td>
		
		</tr>
		</table>	

<div style="position: fixed; right:32; top:55;width:400px;height:580px;line-height:3cm;overflow:scroll;padding:5px">
<table border="1">
<tr>
<th>
ID
</th>
<th>
Edit
</th>
<th>
Name
</th>
<th>
Buckle_no
</th>
<th>
Phone
</th> 
<th>
Email-Id
</th>
<th>
Zone
</th>
<th>
Police Station
</th>
</tr> 
 <?php
define('HOST','mysql.hostinger.in');
define('USER','u682671774_buddy');
define('PASS','buddy_cop_ec');
define('DB','u682671774_buddy');
 $submit='Save IO Detials';
 
 $_SESSION['submit'] = $submit;
 
 session_start();
 
 $con = new mysqli(HOST,USER,PASS,DB);
/*$ID=$POST['ID'];
$IO_name = $_POST['name'];
 $buckle_no = $_POST['buckle_no'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $zone = $_POST['zone'];
 $police_station =$_POST['police_station'];*/

$sql ="SELECT * FROM IO_Record ORDER BY ID DESC";
//$result=mysqli_query($sql);

$result = mysqli_query($con,$sql);

$rowcount=mysqli_num_rows($result);
$i=0;
	while($i<$rowcount)
	{
		
		$rows=mysqli_fetch_array ($result);
		
		
		
		
		
		
		//$rows=mysqli_fetch_row ($result);
		
	//$rows=mysqli_fetch_assoc ($result);
	
/*$f1=mysql_result($result,$i,"field1");
$f2=mysql_result($result,$i,"field2");
$f3=mysql_result($result,$i,"field3");
$f4=mysql_result($result,$i,"field4");
	
*/	
	
	
?>	
<tr>
<td><?php	echo $rows['ID'];?></td>
<?php
			echo '<td><a href="record_for_update_IO.php?ID=' . $rows['ID'] . '" >Edit</a></td>';
?>
<td>	
	<?php 
	echo $rows['IO_name'];?>
</td>
<td>
<?php	echo $rows['buckle_no'];?></td>
<td><?php	echo $rows['phone'];?></td>
<td>	<?php echo $rows['email'];?></td>
<td>	<?php echo $rows['zone'];?></td>
<td>	<?php echo $rows['police_station'];?></td>
			
	<?php
	$i++;	
}
?>
</td>
</tr>
</table>
</div>	 








		
	<!--	<table align="left" >
		<tr>
		<td><?php //include 'footer_cyber.php';?></td>
		</tr>		
		</table>		
		
		-->
		</form>
		
		</center>
	</body>
	

</html>



<?php
}
elseif ($submit == 'All Records')
{
error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	$query = mysqli_query($mysqli, "SELECT ID,hostel_name,visited_to,present_girls,IO_name,zone,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date,Print FROM Survey_Record ORDER BY ID ");
	if (!$query) 
		{
    die ('SQL Error: ' . mysqli_error($mysqli));
		}	

	?>		

<html>
<head> 
<body background="img.PNG">
    <title>All Records</title>
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }
 
        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
        }
		
		 h2 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 15px;
        }
 
 
        table td {
            transition: all .5s;
        }
         
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }
 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }
 
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
 
        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }
 
        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }
 
        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
	
	
	<script>
	function myFunction() {
    window.print();	
	}
	</script>
	
	
</head>
<body>
 <center>
 
 
 
 
	<h1>All Records</h1>
<!--	<p align="Right"><a href="buddycop.php" >Logout</a></p>		
	<input type="hidden" name ="print_id" value="<?php //echo $id ?>">		-->
	<p align="Right"><input type= "submit" value="Print this page" name ="Print" onclick="this.style.visibility= 'hidden';myFunction()" class="button"></p>	

    <h2>Nagpur</h2>
	

    <table class="data-table">
	
		
       
		
		<label class="title"><?php //echo $row['$BRANCH'];  ?> 
        <thead>
            <tr>
		
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
                
            </tr>
        </thead>
        <tbody>
        <?php
        
        while ($row = mysqli_fetch_array($query))
        { ?>
          <tr>
		  <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['hostel_name']; ?></td>
          <td><?php echo $row['visited_to']; ?></td>
          <td><?php echo $row['present_girls']; ?></td>
		  <td><?php echo $row['IO_name']; ?></td>
		  <td><?php echo $row['zone']; ?></td>
		  <td><?php echo $row['police_station']; ?></td>
		  
		  <td><?php echo $row['Complaint']; ?></td>
		  <td><?php echo $row['CCTV_Camera']; ?></td>
		  <td><?php echo $row['compound_wall']; ?></td>
		  <td><?php echo $row['entry_register']; ?></td>
		  <td><?php echo $row['Latitude']; ?></td>
		  <td><?php echo $row['Longitude']; ?></td>
		  <td><?php echo $row['read_current_date']; ?></td>
		  
		  
		<?php echo '<td><a href="Print_Preview1.php?ID=' . $row['ID'] . '&Hostel Name=' . $row['Hostel Name'] . '&Person Available=' . $row['Person Available'] . '&Girls at present=' . $row['Girls at present'] . '&IO=' . $row['IO'] . '&Zone=' . $row['Zone'] . '&Police Station=' . $row['Police Station'] . '&Compalint=' . $row['Compalint'] . '&CCTV=' . $row['CCTV'] . '&Compound Wall=' . $row['Compound Wall'].'&Entry Register=' . $row['Entry Register'] . '&Latitude=' . $row['Latitude'] .'&Longitude=' . $row['Longitude'] . '&Date=' . $row['Date'] .'" >Print</a></td>';
?>
        </tr>
           
            
        <?php 
		
		}?>
        </tbody>
       
    </table>
	<?php
	
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
	$sql ="SELECT ID,hostel_name,visited_to,present_girls,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record WHERE print_status = 'N'ID='$ID'"; 
		 
	
	
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
			<td><input type="text" name="Print" value="<?php echo $row['Print']; ?>" ></td>
     
			
			
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
	
	
<!--	<p>

<a href="main.php">Back to Home Page</a></p>
	
	<br></br>
		<br></br>
		<br></br>
		
	
		
		<footer id="yt_footer" class="block">
<div class="container">
<div class="row">
<div id="yt_copyright" class="col-sm-12"  >
<div class="copyright">
Copyright © 2017 Embedded Creation. All Rights Reserved</div>
<div class="designby ">
Designed by <a target="_blank" title="Visit SmartAddons!" href="http://embeddedcreation.com/">Embedded Creations</a>
and Supported by <a target="_blank" title="Visit SmartAddons!" href="http://jigyasarnd.in/">Jigyasa Research & Development Society</a>
</div>
</div>
</div>
</div>
 </footer>			-->
 
 
 </center>
 
</body>
</html>					


<?php
}		
elseif ($submit == 'Print Selected List')
{
	
	$Print_List = $_POST['Print_List'];
	
	if($Print_List == 'Hostel List')
	{
				
//		header("location:http://www.ec-jrc.com/buddycop/Print_Preview.php"); 

	error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	$query = mysqli_query($mysqli, "SELECT ID,hostel_name,hostel_address,owner_name,num_girls,zone,police_station FROM Hostel_Record ORDER BY ID ");
	if (!$query) 
		{
    die ('SQL Error: ' . mysqli_error($mysqli));
		}	

	?>		

<html>
<head>
<body background="img.PNG">
    <title>Hostel List</title>
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }
 
        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
        }
		
		 h2 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 15px;
        }
 
 
        table td {
            transition: all .5s;
        }
         
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }
 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }
 
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
 
        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }
 
        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }
 
        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
	
	
	<script>
	function myFunction() {
    window.print();	
	}
	</script>
	
	
</head>
<body>
 <center>
 
 
 
 
	<h1>Hostel List</h1>
<!--	<p align="Right"><a href="buddycop.php" >Logout</a></p>		
	<input type="hidden" name ="print_id" value="<?php //echo $id ?>">		-->
	<p align="Right"><input type= "submit" value="Print this page" name ="Print" onclick="this.style.visibility= 'hidden';myFunction()" class="button"></p>	

    <h2>Nagpur</h2>
	

    <table class="data-table">
	
		
       
		
		<label class="title"><?php //echo $row['$BRANCH'];  ?> 
        <thead>
            <tr>
		
				<th>ID</th>
                <th>Name of hostel</th>
                <th>Address</th>
				<th>Owner Name</th>
				<th>Girls in hostel</th>
				<th>Zone</th>
				<th>Police Station</th>
				</tr>
                
            </tr>
        </thead>
        <tbody>
        <?php
        
        while ($row = mysqli_fetch_array($query))
        { ?>
          <tr>
		  <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['hostel_name']; ?></td>
          <td><?php echo $row['hostel_address']; ?></td>
          <td><?php echo $row['owner_name']; ?></td>
		  <td><?php echo $row['num_girls']; ?></td>
		  <td><?php echo $row['zone']; ?></td>
		  <td><?php echo $row['police_station']; ?></td>
        </tr>
           
            
        <?php }?>
        </tbody>
       
    </table>
	
	
<!--	<p>

<a href="main.php">Back to Home Page</a></p>
	
	<br></br>
		<br></br>
		<br></br>
		
	
		
		<footer id="yt_footer" class="block">
<div class="container">
<div class="row">
<div id="yt_copyright" class="col-sm-12"  >
<div class="copyright">
Copyright © 2017 Embedded Creation. All Rights Reserved</div>
<div class="designby ">
Designed by <a target="_blank" title="Visit SmartAddons!" href="http://embeddedcreation.com/">Embedded Creations</a>
and Supported by <a target="_blank" title="Visit SmartAddons!" href="http://jigyasarnd.in/">Jigyasa Research & Development Society</a>
</div>
</div>
</div>
</div>
 </footer>			-->
 
 
 </center>
 
</body>
</html>					

<?php	
	}
	elseif ($Print_List == 'IO List')
	{
//		header("location:http://www.ec-jrc.com/buddycop/Print_Preview.php"); 
error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	$query = mysqli_query($mysqli, "SELECT ID,IO_name,buckle_no,phone,email,zone,police_station FROM IO_Record ORDER BY ID ");
	if (!$query) 
		{
    die ('SQL Error: ' . mysqli_error($mysqli));
		}
?>		
<html>
<head>
<body background="img.PNG">
    <title>IO List</title>
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }
 
        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
        }
		
		 h2 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 15px;
        }
 
 
        table td {
            transition: all .5s;
        }
         
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }
 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }
 
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
 
        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }
 
        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }
 
        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
	
	
	<script>
	function myFunction() {
    window.print();	
	}
	</script>
	
	
</head>
<body>
 <center>
 
 
 
 
	<h1>IO List</h1>
<!-- <p align="Right"><a href="buddycop.php" >Logout</a></p>		
	<input type="hidden" name ="print_id" value="<?php //echo $id ?>">	-->	
	<p align="Right"><input type= "submit" value="Print this page" name ="Print" onclick="this.style.visibility= 'hidden';myFunction()" class="button"></p>	

    <h2>Nagpur</h2>
	

    <table class="data-table">
	
		
       
		
		<label class="title"><?php //echo $row['$BRANCH'];  ?> 
        <thead>
            <tr>
		
				<th>ID</th>
                <th>Name</th>
                <th>Buckle Number</th>
				<th>Phone</th>
				<th>Zone</th>
				<th>Police Station</th>
				</tr>
                
            </tr>
        </thead>
        <tbody>
        <?php
        
        while ($row = mysqli_fetch_array($query))
        { ?>
          <tr>
		  <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['IO_name']; ?></td>
          <td><?php echo $row['buckle_no']; ?></td>
          <td><?php echo $row['phone']; ?></td>
		  <td><?php echo $row['zone']; ?></td>
		  <td><?php echo $row['police_station']; ?></td>
        </tr>
           
            
        <?php }?>
        </tbody>
       
    </table>
	
	
<!--	<p>

<a href="main.php">Back to Home Page</a></p>
	
	<br></br>
		<br></br>
		<br></br>
		
	
		
		<footer id="yt_footer" class="block">
<div class="container">
<div class="row">
<div id="yt_copyright" class="col-sm-12"  >
<div class="copyright">
Copyright © 2017 Embedded Creation. All Rights Reserved</div>
<div class="designby ">
Designed by <a target="_blank" title="Visit SmartAddons!" href="http://embeddedcreation.com/">Embedded Creations</a>
and Supported by <a target="_blank" title="Visit SmartAddons!" href="http://jigyasarnd.in/">Jigyasa Research & Development Society</a>
</div>
</div>
</div>
</div>
 </footer>		-->
 
 
 </center>
 
</body>
</html>		
<?php	
	}
	else
	{
		header("location:http://www.ec-jrc.com/buddycop/main.php"); 
	}	
?>	
<?php
  }
elseif ($submit == 'Print Record')
	{
		$zone = $_POST['zone'];
		$police_station =$_POST['police_station'];
		$IO_name = $_POST['IO_name'];
		$hostel_name = $_POST['hostel_name'];
		
		/*echo $zone;
		echo $police_station;
		echo $IO_name;
		echo $hostel_name;*/
		
		
		if ($zone == '' and $police_station == '' and $IO_name == '' and $hostel_name == '')
		{
			header("location:http://www.ec-jrc.com/buddycop/main.php"); 
		}			
		elseif ($zone != '' and $police_station == '' and $IO_name == '' and $hostel_name == '')
		{
			
			
			
			
			
			
			
			
			
			error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	$query = mysqli_query($mysqli, "SELECT ID,hostel_name,visited_to,present_girls,IO_name,police_station,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record where zone = '$zone' ORDER BY ID desc");
	if (!$query) 
		{
    die ('SQL Error: ' . mysqli_error($mysqli));
		}	

	?>		

<html>
<head>
<body background="img.PNG">
    <title>All Records</title>
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }
 
        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
        }
		
		 h2 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 15px;
        }
 
 
        table td {
            transition: all .5s;
        }
         
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }
 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }
 
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
 
        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }
 
        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }
 
        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
	
	
	<script>
	function myFunction() {
    window.print();	
	}
	</script>
	
	
</head>
<body>
 <center>
 
 
 
 
	<h1>All Records</h1>
<!--	<p align="Right"><a href="buddycop.php" >Logout</a></p>		
	<input type="hidden" name ="print_id" value="<?php //echo $id ?>">		-->
	<p align="Right"><input type= "submit" value="Print this page" name ="Print" onclick="this.style.visibility= 'hidden';myFunction()" class="button"></p>	

    <h2>Nagpur</h2>
	<h3><?php echo $zone ?></h3>
	

    <table class="data-table">
	
		
       
		
		<label class="title"><?php //echo $row['$BRANCH'];  ?> 
        <thead>
            <tr>
		
				<th>ID</th>
                <th>Hostel Name</th>
                <th>Person Available</th>
				<th>Girls at present</th>
				<th>IO</th>
				
				<th>Police Station</th>
				<th>Compalint</th>
				<th>CCTV</th>
				<th>Compound Wall</th>
				<th>Entry Register</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Date</th>
				</tr>
                
            </tr>
        </thead>
        <tbody>
        <?php
        
        while ($row = mysqli_fetch_array($query))
        { ?>
          <tr>
		  <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['hostel_name']; ?></td>
          <td><?php echo $row['visited_to']; ?></td>
          <td><?php echo $row['present_girls']; ?></td>
		  <td><?php echo $row['IO_name']; ?></td>
		  
		  <td><?php echo $row['police_station']; ?></td>
		  
		  <td><?php echo $row['Complaint']; ?></td>
		  <td><?php echo $row['CCTV_Camera']; ?></td>
		  <td><?php echo $row['compound_wall']; ?></td>
		  <td><?php echo $row['entry_register']; ?></td>
		  <td><?php echo $row['Latitude']; ?></td>
		  <td><?php echo $row['Longitude']; ?></td>
		  <td><?php echo $row['read_current_date']; ?></td>
        </tr>
           
            
        <?php }?>
        </tbody>
       
    </table>
	
	
<!--	<p>

<a href="main.php">Back to Home Page</a></p>
	
	<br></br>
		<br></br>
		<br></br>
		
	
		
		<footer id="yt_footer" class="block">
<div class="container">
<div class="row">
<div id="yt_copyright" class="col-sm-12"  >
<div class="copyright">
Copyright © 2017 Embedded Creation. All Rights Reserved</div>
<div class="designby ">
Designed by <a target="_blank" title="Visit SmartAddons!" href="http://embeddedcreation.com/">Embedded Creations</a>
and Supported by <a target="_blank" title="Visit SmartAddons!" href="http://jigyasarnd.in/">Jigyasa Research & Development Society</a>
</div>
</div>
</div>
</div>
 </footer>			-->
 
 
 </center>
 
</body>
</html>					


<?php

			
		}
		elseif ($zone != '' and $police_station != '' and $IO_name == '' and $hostel_name == '')
		{
			
			
			
			
			
			
			
			
			
			error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	$query = mysqli_query($mysqli, "SELECT ID,hostel_name,visited_to,present_girls,IO_name,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record where police_station = '$police_station' ORDER BY ID desc");
	if (!$query) 
		{
    die ('SQL Error: ' . mysqli_error($mysqli));
		}	

	?>		

<html>
<head>
<body background="img.PNG">
    <title>All Records</title>
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }
 
        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
        }
		
		 h2 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 15px;
        }
 
 
        table td {
            transition: all .5s;
        }
         
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }
 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }
 
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
 
        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }
 
        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }
 
        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
	
	
	<script>
	function myFunction() {
    window.print();	
	}
	</script>
	
	
</head>
<body>
 <center>
 
 
 
 
	<h1>All Records</h1>
<!--	<p align="Right"><a href="buddycop.php" >Logout</a></p>		
	<input type="hidden" name ="print_id" value="<?php //echo $id ?>">		-->
	<p align="Right"><input type= "submit" value="Print this page" name ="Print" onclick="this.style.visibility= 'hidden';myFunction()" class="button"></p>	

    <h2>Nagpur</h2>
	<h3><?php echo $zone ?></h3>
	<h3><?php echo $police_station ?></h3>
	

    <table class="data-table">
	
		
       
		
		<label class="title"><?php //echo $row['$BRANCH'];  ?> 
        <thead>
            <tr>
		
				<th>ID</th>
                <th>Hostel Name</th>
                <th>Person Available</th>
				<th>Girls at present</th>
				<th>IO</th>
				
				
				<th>Compalint</th>
				<th>CCTV</th>
				<th>Compound Wall</th>
				<th>Entry Register</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Date</th>
				</tr>
                
            </tr>
        </thead>
        <tbody>
        <?php
        
        while ($row = mysqli_fetch_array($query))
        { ?>
          <tr>
		  <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['hostel_name']; ?></td>
          <td><?php echo $row['visited_to']; ?></td>
          <td><?php echo $row['present_girls']; ?></td>
		  <td><?php echo $row['IO_name']; ?></td>
		  
		  
		  
		  <td><?php echo $row['Complaint']; ?></td>
		  <td><?php echo $row['CCTV_Camera']; ?></td>
		  <td><?php echo $row['compound_wall']; ?></td>
		  <td><?php echo $row['entry_register']; ?></td>
		  <td><?php echo $row['Latitude']; ?></td>
		  <td><?php echo $row['Longitude']; ?></td>
		  <td><?php echo $row['read_current_date']; ?></td>
        </tr>
           
            
        <?php }?>
        </tbody>
       
    </table>
	
	
<!--	<p>

<a href="main.php">Back to Home Page</a></p>
	
	<br></br>
		<br></br>
		<br></br>
		
	
		
		<footer id="yt_footer" class="block">
<div class="container">
<div class="row">
<div id="yt_copyright" class="col-sm-12"  >
<div class="copyright">
Copyright © 2017 Embedded Creation. All Rights Reserved</div>
<div class="designby ">
Designed by <a target="_blank" title="Visit SmartAddons!" href="http://embeddedcreation.com/">Embedded Creations</a>
and Supported by <a target="_blank" title="Visit SmartAddons!" href="http://jigyasarnd.in/">Jigyasa Research & Development Society</a>
</div>
</div>
</div>
</div>
 </footer>			-->
 
 
 </center>
 
</body>
</html>					


<?php

			
		}
		elseif ($zone != '' and $police_station != '' and $IO_name != '' and $hostel_name == '')
		{
			
			
			
			
			
			
			
			
			
			error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	$query = mysqli_query($mysqli, "SELECT ID,hostel_name,visited_to,present_girls,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record where IO_name = '$IO_name' ORDER BY ID desc");
	if (!$query) 
		{
    die ('SQL Error: ' . mysqli_error($mysqli));
		}	

	?>		

<html>
<head>
<body background="img.PNG">
    <title>All Records</title>
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }
 
        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
        }
		
		 h2 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 15px;
        }
 
 
        table td {
            transition: all .5s;
        }
         
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }
 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }
 
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
 
        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }
 
        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }
 
        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
	
	
	<script>
	function myFunction() {
    window.print();	
	}
	</script>
	
	
</head>
<body>
 <center>
 
 
 
 
	<h1>All Records</h1>
<!--	<p align="Right"><a href="buddycop.php" >Logout</a></p>		
	<input type="hidden" name ="print_id" value="<?php //echo $id ?>">		-->
	<p align="Right"><input type= "submit" value="Print this page" name ="Print" onclick="this.style.visibility= 'hidden';myFunction()" class="button"></p>	

    <h2>Nagpur</h2>
	<h3><?php echo $zone ?></h3>
	<h3><?php echo $police_station ?></h3>
	<h3><?php echo $IO_name ?></h3>
	

    <table class="data-table">
	
		
       
		
		<label class="title"><?php //echo $row['$BRANCH'];  ?> 
        <thead>
            <tr>
		
				<th>ID</th>
                <th>Hostel Name</th>
                <th>Person Available</th>
				<th>Girls at present</th>
				
				
				
				<th>Compalint</th>
				<th>CCTV</th>
				<th>Compound Wall</th>
				<th>Entry Register</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Date</th>
				</tr>
                
            </tr>
        </thead>
        <tbody>
        <?php
        
        while ($row = mysqli_fetch_array($query))
        { ?>
          <tr>
		  <td><?php echo $row['ID']; ?></td>
          <td><?php echo $row['hostel_name']; ?></td>
          <td><?php echo $row['visited_to']; ?></td>
          <td><?php echo $row['present_girls']; ?></td>
		  
		  
		  
		  
		  <td><?php echo $row['Complaint']; ?></td>
		  <td><?php echo $row['CCTV_Camera']; ?></td>
		  <td><?php echo $row['compound_wall']; ?></td>
		  <td><?php echo $row['entry_register']; ?></td>
		  <td><?php echo $row['Latitude']; ?></td>
		  <td><?php echo $row['Longitude']; ?></td>
		  <td><?php echo $row['read_current_date']; ?></td>
        </tr>
           
            
        <?php }?>
        </tbody>
       
    </table>
	
	
<!--	<p>

<a href="main.php">Back to Home Page</a></p>
	
	<br></br>
		<br></br>
		<br></br>
		
	
		
		<footer id="yt_footer" class="block">
<div class="container">
<div class="row">
<div id="yt_copyright" class="col-sm-12"  >
<div class="copyright">
Copyright © 2017 Embedded Creation. All Rights Reserved</div>
<div class="designby ">
Designed by <a target="_blank" title="Visit SmartAddons!" href="http://embeddedcreation.com/">Embedded Creations</a>
and Supported by <a target="_blank" title="Visit SmartAddons!" href="http://jigyasarnd.in/">Jigyasa Research & Development Society</a>
</div>
</div>
</div>
</div>
 </footer>			-->
 
 
 </center>
 
</body>
</html>					


<?php

			
		}
		elseif ($zone != '' and $police_station != '' and $IO_name != '' and $hostel_name != '')
		{
			
			
			
			
			
			
			
			
			
			error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	$query = mysqli_query($mysqli, "SELECT ID,hostel_name,visited_to,present_girls,Complaint,CCTV_Camera,compound_wall,entry_register,Latitude,Longitude,read_current_date FROM Survey_Record where hostel_name= '$hostel_name' ORDER BY ID desc");
	if (!$query) 
		{
    die ('SQL Error: ' . mysqli_error($mysqli));
		}	

	?>		

<html>
<head>
<body background="img.PNG">
    <title>All Records</title>
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }
        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }
 
        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
        }
		
		 h2 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 15px;
        }
 
 
        table td {
            transition: all .5s;
        }
         
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }
 
        .data-table th, 
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }
        .data-table caption {
            margin: 7px;
        }
 
        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }
 
        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }
 
        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }
 
        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }
    </style>
	
	
	<script>
	function myFunction() {
    window.print();	
	}
	</script>
	
	
</head>
<body>
 <center>
 
 
 
 
	<h1>All Records</h1>
<!--	<p align="Right"><a href="buddycop.php" >Logout</a></p>		
	<input type="hidden" name ="print_id" value="<?php //echo $id ?>">		-->
	<p align="Right"><input type= "submit" value="Print this page" name ="Print" onclick="this.style.visibility= 'hidden';myFunction()" class="button"></p>	

    <h2>Nagpur</h2>
	<h3><?php echo $zone ?></h3>
	<h3><?php echo $police_station ?></h3>
	<h3><?php echo $IO_name ?></h3>
	<h3><?php echo $hostel_name ?></h3>
	

    <table class="data-table">
	
		
       
		
		<label class="title"><?php //echo $row['$BRANCH'];  ?> 
        <thead>
            <tr>
		
				<th>ID</th>
                
                <th>Person Available</th>
				<th>Girls at present</th>
				
				
				
				<th>Compalint</th>
				<th>CCTV</th>
				<th>Compound Wall</th>
				<th>Entry Register</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Date</th>
				</tr>
                
            </tr>
        </thead>
        <tbody>
        <?php
        
        while ($row = mysqli_fetch_array($query))
        { ?>
          <tr>
		  <td><?php echo $row['ID']; ?></td>
          
          <td><?php echo $row['visited_to']; ?></td>
          <td><?php echo $row['present_girls']; ?></td>
		  
		  
		  
		  
		  <td><?php echo $row['Complaint']; ?></td>
		  <td><?php echo $row['CCTV_Camera']; ?></td>
		  <td><?php echo $row['compound_wall']; ?></td>
		  <td><?php echo $row['entry_register']; ?></td>
		  <td><?php echo $row['Latitude']; ?></td>
		  <td><?php echo $row['Longitude']; ?></td>
		  <td><?php echo $row['read_current_date']; ?></td>
        </tr>
           
            
        <?php }?>
        </tbody>
       
    </table>
	
	
<!--	<p>

<a href="main.php">Back to Home Page</a></p>
	
	<br></br>
		<br></br>
		<br></br>
		
	
		
		<footer id="yt_footer" class="block">
<div class="container">
<div class="row">
<div id="yt_copyright" class="col-sm-12"  >
<div class="copyright">
Copyright © 2017 Embedded Creation. All Rights Reserved</div>
<div class="designby ">
Designed by <a target="_blank" title="Visit SmartAddons!" href="http://embeddedcreation.com/">Embedded Creations</a>
and Supported by <a target="_blank" title="Visit SmartAddons!" href="http://jigyasarnd.in/">Jigyasa Research & Development Society</a>
</div>
</div>
</div>
</div>
 </footer>			-->
 
 
 </center>
 
</body>
</html>					


<?php

			
		}
		
		
		
		
		
		
		
//		header("location:http://www.ec-jrc.com/buddycop/Print_Preview.php"); 
/*	error_reporting(0);
	$mysqli = new mysqli("mysql.hostinger.in","u682671774_buddy","buddy_cop_ec","u682671774_buddy");
	
	$query = mysqli_query($mysqli, "SELECT ID,IO_name,buckle_no,phone,email,zone,police_station FROM IO_Record ORDER BY ID ");
	if (!$query) 
		{
    die ('SQL Error: ' . mysqli_error($mysqli));
		}	*/
//		echo 'hai';




	}/*
	 elseif ($submit == "Excel Report") {
	if ($from_date != "" and $to_date != "") {
			
	session_start();
	$_SESSION['from_date'] = $from_date;	
	$_SESSION['to_date'] = $to_date;	
	header("location:http://www.ec-jrc.com/buddycop/Excel1.php");
	} else {
	header("location:http://www.ec-jrc.com/buddycop/main.php"); 		
	}
*/
?>		




<?php
}	
?>
	